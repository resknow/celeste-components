<?php

add_filter( 'twilight.component.AccordionTrigger', function( $context ) {

    [ $props, $rest ] = props( 'AccordionTrigger', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );