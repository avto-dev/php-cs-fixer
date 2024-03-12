<p align="center">
  <img alt="logo" src="https://hsto.org/webt/z7/4w/hk/z74whki0f3xq-rbturgbak5mrpi.png" width="70" height="70" />
</p>

# Автоматический Code Style Fixer для PHP

[![Version][badge_packagist_version]][link_packagist]
[![Version][badge_php_version]][link_packagist]
[![Build Status][badge_build]][link_build]
[![Downloads count][badge_downloads_count]][link_packagist]
[![License][badge_license]][link_license]

Данный пакет для `composer` позволяет запускать автоматический `Code Style Fixer` для `PHP` с фиксированным набором правил, принятых в качестве основных для оформления исходного `php` кода.

## Install

Require this package with composer using the following command:

```shell
$ composer require avto-dev/php-cs-fixer "^1.5"
```

> Installed `composer` is required ([how to install composer][getcomposer]).

## Использование

В директории с вашим приложением выполните в терминале:

```shell
$ php ./vendor/bin/cs-fix
```

Опционально можете передать свои параметры запуска. При передаче параметра `--config` - все параметры, что формирует данный пакет - будут проигнорированы, и будет произведен запуск именно с теми параметрами, что будут переданы вами.

Если вам требуется опционально переопределить переопределить параметры правил fixer-а, то создайте в корне вашего приложения файл `.cs_rules.php`, возвращающий ассоциированный массив правил (более подробно о самих правилах можешь ознакомиться по [этой ссылке][vendor_fixer]). При его наличии его контент будет мерджиться с конфигом пакета, опционально перекрывая необходимые правила. Иметь он должен следующий вид:

```php
<?php

/**
 * CS Fixer Rules.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
return [
    '@PSR2'                  => true,
    '@PHP71Migration'        => true,
    'binary_operator_spaces' => [
        'operators' => [
            '='  => 'align_single_space',
            '=>' => 'align_single_space',
        ],
    ],
    'blank_line_after_namespace'         => true,
    'blank_line_after_opening_tag'       => true,
];
```

Так же в корне можете разместить файл `.cs_excludes.php`, содержащий пути директорий, которые следует исключить при обработке, вида:

```php
<?php

/**
 * Excludes directories names.
 *
 * NOTE: excludes will works only for directories.
 */
return [
    'bootstrap',
    'storage',
    'vendor',
    'public',
    'resources',
];
```

Для переопределения пути файла кэша - установите в переменной окружения переменную с именем `PHP_CS_FIX_CACHE_FILE_PATH`, значение которой - необходимый путь. Например:

```shell
$ PHP_CS_FIX_CACHE_FILE_PATH=./.new.cache ./cs-fix
```

Более подробно о работе пакета - `Look into the sources, Luke`.

## Changes log

[![Release date][badge_release_date]][link_releases]
[![Commits since latest release][badge_commits_since_release]][link_commits]

Changes log can be [found here][link_changes_log].

## Support

[![Issues][badge_issues]][link_issues]
[![Issues][badge_pulls]][link_pulls]

If you will find any package errors, please, [make an issue][link_create_issue] in current repository.

## License

This is open-sourced software licensed under the [MIT License][link_license].

[badge_build]:https://img.shields.io/github/actions/workflow/status/avto-dev/php-cs-fixer/tests.yml
[badge_packagist_version]:https://img.shields.io/packagist/v/avto-dev/php-cs-fixer.svg?maxAge=180
[badge_php_version]:https://img.shields.io/packagist/php-v/avto-dev/php-cs-fixer.svg?longCache=true
[badge_downloads_count]:https://img.shields.io/packagist/dt/avto-dev/php-cs-fixer.svg?maxAge=180
[badge_license]:https://img.shields.io/packagist/l/avto-dev/php-cs-fixer.svg?longCache=true
[badge_release_date]:https://img.shields.io/github/release-date/avto-dev/php-cs-fixer.svg?style=flat-square&maxAge=180
[badge_commits_since_release]:https://img.shields.io/github/commits-since/avto-dev/php-cs-fixer/latest.svg?style=flat-square&maxAge=180
[badge_issues]:https://img.shields.io/github/issues/avto-dev/php-cs-fixer.svg?style=flat-square&maxAge=180
[badge_pulls]:https://img.shields.io/github/issues-pr/avto-dev/php-cs-fixer.svg?style=flat-square&maxAge=180

[link_build]:https://github.com/avto-dev/php-cs-fixer/actions
[link_releases]:https://github.com/avto-dev/php-cs-fixer/releases
[link_packagist]:https://packagist.org/packages/avto-dev/php-cs-fixer
[link_changes_log]:https://github.com/avto-dev/php-cs-fixer/blob/master/CHANGELOG.md
[link_issues]:https://github.com/avto-dev/php-cs-fixer/issues
[link_create_issue]:https://github.com/avto-dev/php-cs-fixer/issues/new/choose
[link_commits]:https://github.com/avto-dev/php-cs-fixer/commits
[link_pulls]:https://github.com/avto-dev/php-cs-fixer/pulls
[link_license]:https://github.com/avto-dev/php-cs-fixer/blob/master/LICENSE
[getcomposer]:https://getcomposer.org/download/
[vendor_fixer]:https://github.com/FriendsOfPHP/PHP-CS-Fixer
