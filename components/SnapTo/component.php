<?php

add_filter( 'twilight.component.SnapTo', function( $context ) {

    /**
     * Define Prop Types and split props from the rest of the context
     */
    [ $props, $rest ] = props( 'SnapTo', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

    return $context;
} );