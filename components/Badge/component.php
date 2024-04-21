<?php

add_filter( 'twilight.component.Badge', function( $context ) {

    [ $props, $rest ] = props( 'Badge', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );