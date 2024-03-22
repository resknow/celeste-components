<?php

return [
    'class' => [ 'type' => 'string' ],
    'href' => [ 'type' => 'string' ],
    'variant' => [
        'type' => 'enum',
        'values' => [ 'primary', 'secondary', 'tertiary' ],
        'default' => 'primary'
    ],
    'size' => [
        'type' => 'enum',
        'values' => [ 'sm', 'md', 'lg' ]
    ],
    'icon' => [ 'type' => 'string' ],
    'iconPosition' => [
        'type' => 'enum',
        'values' => [ 'start', 'end' ],
        'default' => 'start'
    ],
    'type' => [
        'type' => 'enum',
        'values' => [ 'button', 'submit', 'reset' ]
    ],
];