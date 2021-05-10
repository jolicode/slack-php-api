<?php

$header = <<<'EOF'
This file is part of JoliCode's Slack PHP API project.

(c) JoliCode <coucou@jolicode.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('docs')
    ->exclude('ci_generated')
;
$config = new PhpCsFixer\Config();

return $config->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        'header_comment' => array('header' => $header),
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
