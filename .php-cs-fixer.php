<?php
return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        'php_unit_method_casing' => false,
        'phpdoc_summary' => false,
        'phpdoc_align' => false,
        'phpdoc_separation' => false,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_trim' => false, // For Laravel IDE Helper
        'no_trailing_whitespace_in_comment' => false,
        'fully_qualified_strict_types' => [
            'import_symbols' => true,
            'phpdoc_tags' => [], // For Laravel IDE Helper
        ],
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__.'/app')
        ->in(__DIR__.'/tests')
    )
;
