<?php

add_filter( 'twilight.component.Carousel', function( $context ) {

    [ $props, $rest ] = props( 'Carousel', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );