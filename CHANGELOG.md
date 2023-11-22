# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## Unreleased

### Added

- New rules instead of deprecated [#14]
  - `compact_nullable_type_declaration: true`
  - `type_declaration_spaces: true`
  - `native_type_declaration_casing: true`

### Changed

- `friendsofphp/php-cs-fixer` has been updated to `^ 3.32.0`

### Removed

- Deprecated rule `compact_nullable_typehint` [#14]
- Deprecated rule `function_typehint_space` [#14]
- Deprecated rule `single_blank_line_before_namespace` [#14]
- Deprecated rule `native_function_type_declaration_casing` [#14]

[#14]:https://github.com/avto-dev/php-cs-fixer/issues/14

## v1.5.0

### Changed

- `single_blank_line_before_namespace` has been replaced with `blank_lines_before_namespace` according base package issue [#7053]
- Minimal version of the package `friendsofphp/php-cs-fixer` now is `v3.18.0`

[#7053]:https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/pull/7053

## v1.4.0

### Added

- New rules:

| Fixer                                    | Value                                                                                                                                       | Description                                                                                                               |
|------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------|
| `no_trailing_comma_in_singleline`        | `true`                                                                                                                                      | If a list of values separated by a comma is contained on a single line, then the last item MUST NOT have a trailing comma |
| `single_class_element_per_statement`     | `['elements' => ['const', 'property']]`                                                                                                     | There MUST NOT be more than one property or constant declared per statement                                               |
| `no_multiple_statements_per_line`        | `true`                                                                                                                                      | There must not be more than one statement per line                                                                        |
| `single_space_around_construct`          | `['constructs_contain_a_single_space' => [], 'constructs_followed_by_a_single_space' => [], 'constructs_preceded_by_a_single_space' => []]` | Ensures a single space after language constructs                                                                          |
| `multiline_whitespace_before_semicolons` | `['strategy' => 'no_multi_line']`                                                                                                           | Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls         |

### Changed

- Minimal required PHP version now is `8.0`
- Minimal version of the package `friendsofphp/php-cs-fixer` now is `v3.16.0`
- Rule set `@PSR12` instead of `@PSR2`

### Removed

- Deprecated rules `no_trailing_comma_in_singleline_array` and `no_trailing_comma_in_list_call`

## v1.3.0

### Changed

- The version of the package `friendsofphp/php-cs-fixer` has been updated to `^ 3.0`

## v1.2.0

### Added

- Support PHP `8.x`

### Changed

- Minimal required PHP version now is `7.2`
- Composer `2.x` is supported now

## v1.1.0

### Added

- New rules:

| Fixer                                              | Value                                                                                   | Description                                                                                                                                                                           |
|----------------------------------------------------|-----------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `array_indentation`                                | `true`                                                                                  | Each element of an array must be indented exactly once                                                                                                                                |
| `class_attributes_separation`                      | `['elements' => ['const', 'method', 'property']]`                                       | Class, trait and interface elements must be separated with one blank line                                                                                                             |
| `combine_nested_dirname`                           | `true`                                                                                  | Replace multiple nested calls of dirname by only one call with second $level parameter. Requires PHP >= 7.0                                                                           |
| `comment_to_phpdoc`                                | `true`                                                                                  | Comments with annotation should be docblock when used on structural elements                                                                                                          |
| `escape_implicit_backslashes`                      | `['double_quoted' => true]`                                                             | Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not                                             |
| `explicit_indirect_variable`                       | `true`                                                                                  | Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0                                                                                          |
| `explicit_string_variable`                         | `true`                                                                                  | Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax                                                                                             |
| `fopen_flag_order`                                 | `true`                                                                                  | Order the flags in `fopen` calls, `b` and `t` must be last                                                                                                                            |
| `fopen_flags`                                      | `['b_mode' => true]`                                                                    | The flags in `fopen` calls must omit `t`, and `b` must be omitted or included consistently                                                                                            |
| `fully_qualified_strict_types`                     | `true`                                                                                  | Transforms imported FQCN parameters and return types in function arguments to short version                                                                                           |
| `global_namespace_import`                          | `['import_classes' => false, 'import_constants' => false, 'import_functions' => false]` | Imports or fully qualifies global classes/functions/constants                                                                                                                         |
| `lowercase_static_reference`                       | `true`                                                                                  | Class static references `self`, `static` and `parent` MUST be in lower case                                                                                                           |
| `magic_method_casing`                              | `true`                                                                                  | Magic method definitions and calls must be using the correct casing                                                                                                                   |
| `method_chaining_indentation`                      | `true`                                                                                  | Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported                                                                      |
| `multiline_comment_opening_closing`                | `true`                                                                                  | DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash |
| `native_constant_invocation`                       | `['fix_built_in' => true]`                                                              | Add leading `\` before constant invocation of internal constant to speed up resolving. Constant name match is case-sensitive, except for `null`, `false` and `true`                   |
| `native_function_type_declaration_casing`          | `true`                                                                                  | Native type hints for functions should use the correct case                                                                                                                           |
| `no_alternative_syntax`                            | `true`                                                                                  | Replace control structure alternative syntax to use braces                                                                                                                            |
| `no_unset_cast`                                    | `true`                                                                                  | Variables must be set `null` instead of using `(unset)` casting                                                                                                                       |
| `nullable_type_declaration_for_default_null_value` | `['use_nullable_type_declaration' => true]`                                             | Adds or removes `?` before type declarations for parameters with a default `null` value                                                                                               |
| `phpdoc_line_span`                                 | `['const' => 'multi', 'method' => 'multi', 'property' => 'multi']`                      | Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only                                                                     |
| `return_assignment`                                | `true`                                                                                  | Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method                                                                 |
| `set_type_to_cast`                                 | `true`                                                                                  | Cast shall be used, not `settype`                                                                                                                                                     |
| `simple_to_complex_string_variable`                | `true`                                                                                  | Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`)                                                                  |
| `single_trait_insert_per_statement`                | **`false`**                                                                             | Each trait `use` must be done as single statement                                                                                                                                     |
| `standardize_increment`                            | `true`                                                                                  | Increment and decrement operators should be used if possible                                                                                                                          |
| `static_lambda`                                    | **`false`**                                                                             | Lambdas not (indirect) referencing `$this` must be declared `static`                                                                                                                  |
| `string_line_ending`                               | `true`                                                                                  | All multi-line strings must use correct line ending                                                                                                                                   |
| `native_function_invocation`                       | `['scope'  => 'namespaced', 'strict' => false]`                                         | Add leading `\` before function invocation to speed up resolving                                                                                                                      |
| `php_unit_expectation`                             | `['target' => '5.6']`                                                                   | Usages of `->setExpectedException*` methods MUST be replaced by `->expectException*` methods                                                                                          |

- Excluded directories:
  - `deploy`
  - `docker`
  - `.gitlab`
  - `.github`
  - `docs`
- GitHub actions for tests running
- Docker-based develop environment

### Changed

- Minimal `friendsofphp/php-cs-fixer` package version now is `^2.16`

## v1.0.14

### Changed

- New rules ([configurator](https://mlocati.github.io/php-cs-fixer-configurator)):
  - `'phpdoc_var_annotation_correct_order' => true`
  - `'phpdoc_trim_consecutive_blank_line_separation' => true`
  - `'phpdoc_to_return_type' => false`
  - `'phpdoc_no_empty_return' => false`
  - `'no_trailing_whitespace_in_comment' => false`
  - `'php_unit_test_class_requires_covers' => true`
  - `'php_unit_ordered_covers' => true`
  - `'php_unit_test_case_static_method_calls' => ['call_type' => 'this']`
  - `'php_unit_set_up_tear_down_visibility' => true`
  - `'php_unit_no_expectation_annotation' => true`
  - `'php_unit_namespaced' => true`
  - `'php_unit_mock_short_will_return' => true`
  - `'php_unit_method_casing' => ['case' => 'camel_case']`
  - `'php_unit_fqcn_annotation' => true`
  - `'php_unit_dedicate_assert_internal_type' => true`
  - `'php_unit_dedicate_assert' => true`
  - `'php_unit_construct' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame']`

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
