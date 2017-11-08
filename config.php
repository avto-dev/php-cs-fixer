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

$rules    = require __DIR__ . '/cs_rules.php';
$excludes = require __DIR__ . '/cs_excludes.php';

return $config
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude(file_exists($user_excludes = $project_root_dir . '/.cs_excludes.php')
            ? array_replace_recursive($excludes, require $user_excludes)
            : $excludes)
        ->in($project_root_dir))
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setCacheFile($cache_file_path)
    ->setRules(file_exists($user_rules = $project_root_dir . '/.cs_rules.php')
        ? array_replace_recursive($rules, require $user_rules)
        : $rules);
