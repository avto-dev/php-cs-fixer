<?php

/**
 * CS Fixer Config.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 */

// Detect project root directory
$reflector        = new \ReflectionClass('\Composer\Autoload\ClassLoader');
$project_root_dir = \dirname((string) $reflector->getFileName(), 3);

if (! empty($env_cache_file_path = \getenv('PHP_CS_FIX_CACHE_FILE_PATH')) && \is_string($env_cache_file_path)) {
    $cache_file_path = $env_cache_file_path;
} else {
    $cache_file_name = '.php_cs.cache';

    $cache_file_path = \is_dir($project_root_dir . '/storage')
        ? $project_root_dir . '/storage/' . $cache_file_name
        : $project_root_dir . '/' . $cache_file_name;
}

$rules    = require __DIR__ . '/cs_rules.php';
$excludes = require __DIR__ . '/cs_excludes.php';
$config   = new \PhpCsFixer\Config('Avto Develops Code Style Fixer');

$config
    ->setFinder(
        \PhpCsFixer\Finder::create()
            ->exclude(\file_exists($user_excludes = $project_root_dir . '/.cs_excludes.php')
                ? \array_replace_recursive($excludes, require $user_excludes)
                : $excludes)
            ->in($project_root_dir)
    )
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setRules(\file_exists($user_rules = $project_root_dir . '/.cs_rules.php')
        ? \array_replace_recursive($rules, require $user_rules)
        : $rules)
    ->setCacheFile($cache_file_path);

return $config;
