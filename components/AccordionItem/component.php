<?php

add_filter( 'twilight.component.AccordionItem', function( $context ) {

    [ $props, $rest ] = props( 'AccordionItem', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );