<?php

/**
 * CS Fixer Config.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 */
$cache_file_name = '.php_cs.cache';

// Detect project root directory
$reflector        = new \ReflectionClass('\\Composer\\Autoload\\ClassLoader');
$project_root_dir = realpath(dirname($reflector->getFileName()) . '/../../');

$cache_file_path = is_dir($project_root_dir . '/storage')
    ? $project_root_dir . '/storage/' . $cache_file_name
    : $project_root_dir . '/' . $cache_file_name;

$config = new \PhpCsFixer\Config('Avto Develops Code Style Fixer');

return $config
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude(require __DIR__ . '/excludes.php')
        ->in(__DIR__))
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setCacheFile($cache_file_path)
    ->setRules(require __DIR__ . '/rules.php');
