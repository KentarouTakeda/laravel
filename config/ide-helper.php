<?php

return [
    'write_model_magic_where' => false,
    'write_model_external_builder_methods' => false,
    'write_model_relation_count_properties' => false,
    'write_eloquent_model_mixins' => true,
    'model_locations' => ['app/Models'],
    'include_class_docblocks' => true,
    'force_fqn' => true,
    'post_migrate' => ['ide-helper:models --write --reset'],
];
