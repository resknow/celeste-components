<?php

return [
    'class' => [ 'type' => 'string' ],
    'icon' => [ 'type' => 'string' ],
    'iconPosition' => [
        'type' => 'enum',
        'values' => [ 'start', 'end' ],
        'default' => 'start'
    ],
    'is' => [ 'type' => 'string', 'default' => 'span' ],
    'variant' => [
        'type' => 'enum',
        'default' => 'primary',
        'values' => [ 'primary', 'secondary', 'tertiary', 'base', 'contrast' ]
    ],
];