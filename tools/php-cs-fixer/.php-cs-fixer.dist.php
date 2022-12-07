<?php

$baseDir = __DIR__ . '/../../';

$finder = PhpCsFixer\Finder::create()
    ->in([
        $baseDir . 'laravel-*/src/fr',
    ])
    ->name('*.php');

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);
