<?php

use Resknow\Assets;

add_filter( 'twilight.component.Goform.present', function( $context ) {
    Assets::add( 'script', 'goform', 'https://goform.app/wc.js' );
    return $context;
} );

add_filter( 'twilight.component.Goform', function( $context ) {
    [ $props, $rest ] = props( 'Goform', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );