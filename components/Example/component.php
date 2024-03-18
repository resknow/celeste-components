<?php

add_filter( 'twilight.component.Example', function( $context ) {
    $context['message'] = 'Hello World!';
    return $context;
} );