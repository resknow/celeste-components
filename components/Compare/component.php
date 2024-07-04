<?php

// Do something before the component is rendered, like manipulating the context
add_filter( 'twilight.component.Compare', function( $context ) {

    [ $props, $rest ] = props( 'Compare', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

	return $context;
} );