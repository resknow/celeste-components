<?php

add_filter( 'twilight.component.OpeningTimes', function( $context ) {
    $context['today'] = strtolower( date( 'l' ) );
    return $context;
} );