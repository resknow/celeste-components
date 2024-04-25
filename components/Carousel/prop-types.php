<?php

return [
    'class' => [ 'type' => 'string' ],
    'preview' => [ 'type' => 'boolean', 'default' => false ],
    'selectors' => [ 'type' => 'enum', 'values' => [ 'none', 'withArrows', 'withDots' ] ],
    'autoplay' => [ 'type' => 'boolean', 'default' => false ],
    'autoplaySpeed' => [ 'type' => 'number', 'default' => 5000 ],
];