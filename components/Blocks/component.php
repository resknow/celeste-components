<?php

add_filter( 'twilight.component.Blocks', function( $context ) {

    [ $props, $rest ] = props( 'Blocks', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;

} );