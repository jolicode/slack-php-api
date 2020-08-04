<?php

namespace JoliCode\Slack\Command;

use JoliCode\Slack\Checker\JsonSorter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class GeneratePatchCommand extends Command
{
    protected static $defaultName = 'spec:generate-patch';

    protected function configure()
    {
        $this
            ->setDescription('Generates the patch by comparing Slack\'s official sorted spec to the currently patched one.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ensure the patched specification is alphabetically sorted
        $content = file_get_contents(__DIR__ . '/../../resources/slack-openapi-patched.json');
        $specification = json_decode($content);
        $specification = JsonSorter::recursiveAlphabeticalSort($specification);
        file_put_contents(__DIR__ . '/../../resources/slack-openapi-patched.json', json_encode($specification, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        // generate a patch using a diff between the sorted and the patched specifications
        $io = new SymfonyStyle($input, $output);
        $diffCommand = 'diff -Naur -U10 resources/slack-openapi-sorted.json resources/slack-openapi-patched.json > resources/slack-openapi-sorted.patch';
        $process = Process::fromShellCommandline($diffCommand);
        $process->run();

        if ($process->getExitCode() === 0) {
            $io->warning('No diff found');
        } elseif ($process->getExitCode() === 1) {
            $io->success('Generated a patch');
        } else {
            $io->error('Could not generate the patch');
            throw new ProcessFailedException($process);
        }

        return Command::SUCCESS;
    }
}
