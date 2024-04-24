<?php

add_filter( 'twilight.component.Select', function( $context ) {

    [ $props, $rest ] = props( 'Select', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );