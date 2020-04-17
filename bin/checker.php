#!/usr/bin/env php
<?php

use JoliCode\Slack\Checker\SchemaChecker;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Console\SingleCommandApplication;

(new SingleCommandApplication())
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $result = (new SchemaChecker())->check(__DIR__.'/../resources/slack-openapi-patched.json');
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
            ->setRows($rows)
        ;
        $table->render();
    })
    ->run();
