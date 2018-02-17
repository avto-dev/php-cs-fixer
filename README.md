<p align="center">
  <img alt="logo" src="https://habrastorage.org/webt/z7/4w/hk/z74whki0f3xq-rbturgbak5mrpi.png" width="70" height="70" />
</p>

# Автоматический Code Style Fixer для PHP

[![Version][badge_version]][link_packagist]
[![License][badge_license]][link_license]
[![Issues][badge_issues]][link_issues]
[![Downloads][badge_downloads]][link_packagist]

Данный пакет для `composer` позволяет запускать автоматический `Code Style Fixer` для `PHP` с фиксированным набором правил, принятых в качестве основных для оформления исходного `php` кода.

## Установка

Для установки данного пакета выполните в терминале следующую команду:

```shell
$ composer require --dev avto-dev/php-cs-fixer "^1.0"
```

> Для этого необходим установленный `composer`. Для его установки перейдите по [данной ссылке][getcomposer].

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

Более подробно о работе пакета - `Look into the sources, Luke`.

## Поддержка и развитие

Если у вас возникли какие-либо проблемы по работе с данным пакетом, пожалуйста, создайте соответствующий `issue` в данном репозитории.

Если вы способны самостоятельно реализовать тот функционал, что вам необходим - создайте PR с соответствующими изменениями. Крайне желательно сопровождать PR соответствующими тестами, фиксирующими работу ваших изменений. После проверки и принятия изменений будет опубликована новая минорная версия.

## Лицензирование

Код данного пакета распространяется под лицензией **MIT**.

[badge_version]:https://img.shields.io/packagist/v/avto-dev/php-cs-fixer.svg?style=flat&maxAge=30
[badge_license]:https://img.shields.io/packagist/l/avto-dev/php-cs-fixer.svg
[badge_issues]:https://img.shields.io/github/issues/avto-dev/php-cs-fixer.svg?style=flat&maxAge=30
[badge_downloads]:https://img.shields.io/packagist/dt/avto-dev/php-cs-fixer.svg?style=flat&maxAge=30
[link_packagist]:https://packagist.org/packages/avto-dev/php-cs-fixer
[link_license]:https://github.com/avto-dev/php-cs-fixer/blob/master/LICENSE
[link_issues]:https://github.com/avto-dev/php-cs-fixer/issues

[getcomposer]:https://getcomposer.org/download/
[vendor_fixer]:https://github.com/FriendsOfPHP/PHP-CS-Fixer
