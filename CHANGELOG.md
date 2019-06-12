# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## v1.0.14

### Changed

- New rules ([configurator](https://mlocati.github.io/php-cs-fixer-configurator)):
  - `phpdoc_var_annotation_correct_order' => true`
  - `phpdoc_trim_consecutive_blank_line_separation' => true`
  - `phpdoc_to_return_type' => false`
  - `phpdoc_no_empty_return' => false`
  - `no_trailing_whitespace_in_comment' => false`
  - `php_unit_test_class_requires_covers' => true`
  - `php_unit_ordered_covers' => true`
  - `php_unit_test_case_static_method_calls' => ['call_type' => 'this']`
  - `php_unit_set_up_tear_down_visibility' => true`
  - `php_unit_no_expectation_annotation' => true`
  - `php_unit_namespaced' => true`
  - `php_unit_mock_short_will_return' => true`
  - `php_unit_method_casing' => ['case' => 'camel_case']`
  - `php_unit_fqcn_annotation' => true`
  - `php_unit_dedicate_assert_internal_type' => true`
  - `php_unit_dedicate_assert' => true`
  - `php_unit_construct' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame']`

### Fixed

- Application root dir path

## v1.0.13

### Changed

- `node_modules` added into excludes list

## v1.0.12

### Changed

- Maximal PHP version now is undefined
- Issue templates updated

## v1.0.11

### Added

- `'is_null'  => true`
- `'yoda_style'  => ['equal' => false, 'identical' => false,'less_and_greater' => false],`
- `'simplified_null_return' => true,`

## v1.0.10

## v1.0.9

## v1.0.8

## v1.0.6

## v1.0.5

## v1.0.4

## v1.0.3

## v1.0.2

## v1.0.1

[keepachangelog]:https://keepachangelog.com/en/1.0.0/
[semver]:https://semver.org/spec/v2.0.0.html
