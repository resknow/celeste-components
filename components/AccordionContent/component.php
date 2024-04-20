<?php

add_filter( 'twilight.component.AccordionContent', function( $context ) {

    [ $props, $rest ] = props( 'AccordionContent', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );