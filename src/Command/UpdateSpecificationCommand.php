<?php

namespace JoliCode\Slack\Command;

use JoliCode\Slack\Checker\JsonSorter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class UpdateSpecificationCommand extends Command
{
    protected static $defaultName = 'spec:update';

    protected function configure()
    {
        $this
            ->setDescription('Downloads a new version of the official Slack OpenAPI file, and applies our patches to it.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        // download official Slack OpenAPI spec and save it
        $content = HttpClient::create()->request('GET','https://api.slack.com/specs/openapi/v2/slack_web.json', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ])->getContent();
        file_put_contents(__DIR__ . '/../../resources/slack-openapi.json', $content);
        $output->writeln('<info>Downloaded and saved a new specification version</info>');

        // sort the spec file
        $specification = json_decode($content);
        $specification = JsonSorter::recursiveAlphabeticalSort($specification);
        file_put_contents(__DIR__ . '/../../resources/slack-openapi-sorted.json', json_encode($specification, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        $output->writeln('<info>Sorted the official specification by keys</info>');

        // apply the patches to the sorted spec
        $patchCommand = 'patch --verbose -p0 < resources/slack-openapi-sorted.patch -o resources/slack-openapi-patched.json';
        $process = Process::fromShellCommandline($patchCommand);
        $process->run();

        if (!$process->isSuccessful()) {
            $io->error('Could not apply the patch');
            throw new ProcessFailedException($process);
        }

        $output->writeln($process->getOutput());
        $io->success('Successfully applied the patch');

        return Command::SUCCESS;
    }
}
