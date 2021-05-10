<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    protected function configure(): void
    {
        $this
            ->setDescription('Downloads a new version of the official Slack OpenAPI file, and applies our patches to it.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        // download official Slack OpenAPI spec and save it (use github version to have response specs with examples)
        $content = HttpClient::create()->request('GET', 'https://raw.githubusercontent.com/slackapi/slack-api-specs/master/web-api/slack_web_openapi_v2.json', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ])->getContent();
        file_put_contents(__DIR__.'/../../resources/slack-openapi.json', $content);
        $output->writeln('<info>Downloaded and saved a new specification version</info>');

        // sort the spec file
        $sorter = new JsonSorter();
        file_put_contents(__DIR__.'/../../resources/slack-openapi-sorted.json', $sorter->sort($content));
        $output->writeln('<info>Sorted the official specification by keys and merged User and Conversation objects</info>');

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
