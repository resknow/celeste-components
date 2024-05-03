<?php

add_filter( 'twilight.component.Switch', function( $context ) {

    [ $props, $rest ] = props( 'Switch', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

	return $context;
} );