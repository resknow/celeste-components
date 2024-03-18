<?php

use Resknow\Icon;

add_filter( 'twilight.component.Icon', function( $context ) {
    $context['svg'] = Icon::render( $context['name'], $context['class'] ?? null );
    return $context;
} );