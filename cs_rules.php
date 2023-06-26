<?php

/**
 * CS Fixer Rules.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
return [
    '@PSR12'                                           => true,
    '@PHP71Migration'                                  => true,
    'binary_operator_spaces'                           => [
        'operators' => [
            '='  => 'align_single_space',
            '=>' => 'align_single_space',
        ],
    ],
    'blank_line_after_namespace'                       => true,
    'blank_line_after_opening_tag'                     => true,
    'blank_line_before_statement'                      => true,
    'cast_spaces'                                      => ['space' => 'single'],
    'combine_consecutive_issets'                       => true,
    'combine_consecutive_unsets'                       => true,
    'compact_nullable_typehint'                        => true,
    'concat_space'                                     => ['spacing' => 'one'],
    'declare_equal_normalize'                          => ['space' => 'single'],
    'dir_constant'                                     => true,
    'encoding'                                         => true,
    'function_typehint_space'                          => true,
    'include'                                          => true,
    'line_ending'                                      => true,
    'linebreak_after_opening_tag'                      => true,
    'lowercase_cast'                                   => true,
    'mb_str_functions'                                 => true,
    'magic_constant_casing'                            => true,
    'method_argument_space'                            => false,
    'modernize_types_casting'                          => true,
    'native_function_casing'                           => true,
    'no_alias_functions'                               => true,
    'no_blank_lines_after_phpdoc'                      => true,
    'no_blank_lines_after_class_opening'               => true,
    'no_empty_phpdoc'                                  => true,
    'no_empty_statement'                               => true,
    'no_closing_tag'                                   => true,
    'no_leading_import_slash'                          => true,
    'no_leading_namespace_whitespace'                  => true,
    'no_multiline_whitespace_around_double_arrow'      => true,
    'no_trailing_comma_in_singleline'                  => true,
    'no_null_property_initialization'                  => true,
    'no_spaces_after_function_name'                    => true,
    'no_short_bool_cast'                               => true,
    'no_singleline_whitespace_before_semicolons'       => true,
    'no_spaces_around_offset'                          => true,
    'no_unused_imports'                                => true, // Эта сюка глючила
    'no_whitespace_in_blank_line'                      => true,
    'no_useless_else'                                  => true,
    'no_useless_return'                                => true,
    'no_whitespace_before_comma_in_array'              => true,
    'non_printable_character'                          => true,
    'not_operator_with_successor_space'                => true,
    'normalize_index_brace'                            => true,
    'object_operator_without_whitespace'               => true,
    'ordered_class_elements'                           => true,
    'phpdoc_add_missing_param_annotation'              => ['only_untyped' => false],
    'phpdoc_align'                                     => true,
    'phpdoc_annotation_without_dot'                    => true,
    'phpdoc_indent'                                    => true,
    'phpdoc_inline_tag_normalizer'                     => true,
    'phpdoc_order'                                     => true,
    'phpdoc_separation'                                => true,
    'phpdoc_single_line_var_spacing'                   => true,
    'phpdoc_summary'                                   => true,
    'phpdoc_types'                                     => true,
    'phpdoc_no_access'                                 => true,
    'phpdoc_no_package'                                => true,
    'phpdoc_no_useless_inheritdoc'                     => true,
    'phpdoc_return_self_reference'                     => true,
    'phpdoc_scalar'                                    => true,
    'phpdoc_to_comment'                                => false,
    'phpdoc_trim'                                      => true,
    'phpdoc_types_order'                               => ['null_adjustment' => 'always_last'],
    'phpdoc_var_without_name'                          => true,
    'return_type_declaration'                          => true,
    'self_accessor'                                    => true,
    'semicolon_after_instruction'                      => true,
    'short_scalar_cast'                                => true,
    'single_line_comment_style'                        => true,
    'single_blank_line_at_eof'                         => true,
    'blank_lines_before_namespace'                     => true,
    'single_blank_line_before_namespace'               => false, // deprecated
    'single_line_after_imports'                        => true,
    'single_quote'                                     => true,
    'space_after_semicolon'                            => true,
    'standardize_not_equals'                           => true,
    'ternary_operator_spaces'                          => true,
    'trim_array_spaces'                                => true,
    'trailing_comma_in_multiline'                      => true,
    'unary_operator_spaces'                            => true,
    'void_return'                                      => true,
    'ternary_to_null_coalescing'                       => true,
    'visibility_required'                              => true,
    'whitespace_after_comma_in_array'                  => true,
    'ordered_imports'                                  => [
        'sort_algorithm' => 'length',
        'imports_order'  => [
            'const',
            'class',
            'function',
        ],
    ],
    'array_syntax'                                     => ['syntax' => 'short'],
    'is_null'                                          => true,
    'yoda_style'                                       => [
        'equal'            => false,
        'identical'        => false,
        'less_and_greater' => false,
    ],
    'simplified_null_return'                           => true,

    // since v1.0.14
    'phpdoc_var_annotation_correct_order'              => true,
    'phpdoc_trim_consecutive_blank_line_separation'    => true,
    'phpdoc_to_return_type'                            => false,
    'phpdoc_no_empty_return'                           => false,
    'no_trailing_whitespace_in_comment'                => false,
    'php_unit_test_class_requires_covers'              => true,
    'php_unit_test_case_static_method_calls'           => ['call_type' => 'this'],
    'php_unit_set_up_tear_down_visibility'             => true,
    'php_unit_no_expectation_annotation'               => true,
    'php_unit_namespaced'                              => true,
    'php_unit_mock_short_will_return'                  => true,
    'php_unit_method_casing'                           => ['case' => 'camel_case'],
    'php_unit_fqcn_annotation'                         => true,
    'php_unit_dedicate_assert_internal_type'           => true,
    'php_unit_dedicate_assert'                         => true,
    'php_unit_construct'                               => [
        'assertions' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame'],
    ],

    // since v1.1.0
    'array_indentation'                                => true,
    'class_attributes_separation'                      => [
        'elements' => [
            'const'    => 'only_if_meta',
            'method'   => 'one',
            'property' => 'one',
        ],
    ],
    'combine_nested_dirname'                           => true,
    'comment_to_phpdoc'                                => true,
    'escape_implicit_backslashes'                      => ['double_quoted' => true],
    'explicit_indirect_variable'                       => true,
    'explicit_string_variable'                         => true,
    'fopen_flag_order'                                 => true,
    'fopen_flags'                                      => ['b_mode' => true],
    'fully_qualified_strict_types'                     => true,
    'global_namespace_import'                          => [
        'import_classes'   => false,
        'import_constants' => false,
        'import_functions' => false,
    ],
    'lowercase_static_reference'                       => true,
    'magic_method_casing'                              => true,
    'method_chaining_indentation'                      => true,
    'multiline_comment_opening_closing'                => true,
    'native_constant_invocation'                       => ['fix_built_in' => true],
    'native_function_type_declaration_casing'          => true,
    'no_alternative_syntax'                            => true,
    'no_unset_cast'                                    => true,
    'nullable_type_declaration_for_default_null_value' => ['use_nullable_type_declaration' => true],
    'phpdoc_line_span'                                 => [
        'const'    => 'multi',
        'method'   => 'multi',
        'property' => 'multi',
    ],
    'return_assignment'                                => true,
    'set_type_to_cast'                                 => true,
    'simple_to_complex_string_variable'                => true,
    'single_trait_insert_per_statement'                => false,
    'standardize_increment'                            => true,
    'static_lambda'                                    => false, // breaks down app in `Macroable` trait context
    'string_line_ending'                               => true,
    'native_function_invocation'                       => [
        'scope'  => 'namespaced',
        'strict' => false,
    ],
    'php_unit_expectation'                             => ['target' => '5.6'],

    // since v1.4.0
    'single_class_element_per_statement'               => [
        'elements' => [
            'const',
            'property',
        ],
    ],
    'no_multiple_statements_per_line'                  => true,
    'single_space_around_construct'                    => true,
    'multiline_whitespace_before_semicolons'           => [
        'strategy' => 'no_multi_line',
    ],
];
