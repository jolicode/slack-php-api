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
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class GeneratePatchCommand extends Command
{
    protected static $defaultName = 'spec:generate-patch';

    protected function configure(): void
    {
        $this
            ->setDescription('Generates the patch by comparing Slack\'s official sorted spec to the currently patched one.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ensure the patched specification is alphabetically sorted
        $content = file_get_contents(__DIR__.'/../../resources/slack-openapi-patched.json');
        $sorter = new JsonSorter();
        file_put_contents(__DIR__.'/../../resources/slack-openapi-patched.json', $sorter->sort($content));

        // generate a patch using a diff between the sorted and the patched specifications
        $io = new SymfonyStyle($input, $output);
        $diffCommand = 'diff -Naur -U10 resources/slack-openapi-sorted.json resources/slack-openapi-patched.json > resources/slack-openapi-sorted.patch';
        $process = Process::fromShellCommandline($diffCommand);
        $process->run();

        if (0 === $process->getExitCode()) {
            $io->warning('No diff found');
        } elseif (1 === $process->getExitCode()) {
            $io->success('Generated a patch');
        } else {
            $io->error('Could not generate the patch');
            throw new ProcessFailedException($process);
        }

        return Command::SUCCESS;
    }
}
