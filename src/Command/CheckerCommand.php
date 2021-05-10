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

use JoliCode\Slack\Checker\SchemaChecker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckerCommand extends Command
{
    protected static $defaultName = 'checker';

    protected function configure(): void
    {
        $this
            ->setDescription('Checks the patched file and displays a summary table.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = (new SchemaChecker())->check(__DIR__.'/../../resources/slack-openapi-patched.json');
        $rows = [];

        foreach ($result as $path => $methods) {
            foreach ($methods as $method => $responses) {
                foreach ($responses as $response => $summary) {
                    if (!$summary['errors']) {
                        continue;
                    }

                    foreach ($summary['errors'] as $error) {
                        $rows[] = [$path, strtoupper($method), $response, $error['property'], $error['error']];
                    }
                }
            }
        }

        $table = new Table($output);
        $table
            ->setHeaders(['Path', 'Method', 'Response', 'Property', 'Errors'])
            ->setRows($rows);
        $table->render();

        return Command::SUCCESS;
    }
}
