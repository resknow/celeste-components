<?php

add_filter( 'twilight.component.MarqueeItem', function( $context ) {

    [ $props, $rest ] = props( 'MarqueeItem', $context, [] );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

	return $context;
} );