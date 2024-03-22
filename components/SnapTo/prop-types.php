<?php

return [
    'class' => [ 'type' => 'string' ],

    /**
     * TODO Fix boolean type checking
     *
     * This is a workaround because Twig is passing boolean values
     * as strings for some reason!
     */
    'withArrows' => [ 'type' => 'enum', 'values' => [ '1', '0', 'true', 'false', true, false ] ],
];