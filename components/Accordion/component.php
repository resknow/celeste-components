<?php

add_filter( 'twilight.component.Accordion', function( $context ) {

    [ $props, $rest ] = props( 'Accordion', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );