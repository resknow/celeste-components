<?php

add_filter( 'twilight.component.CarouselItem', function( $context ) {

    [ $props, $rest ] = props( 'CarouselItem', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );