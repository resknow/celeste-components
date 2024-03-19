<?php

add_filter( 'twilight.component.Video', function( $context ) {

    $valid_attributes = [
        'autoplay',
        'controls',
        'controlslist',
        'crossorigin',
        'disablepictureinpicture',
        'disableremoteplayback',
        'loop',
        'muted',
        'playsinline',
        'poster',
        'preload',
        'src'
    ];

    $attributes = [];

    // Format attributes
    foreach ( $valid_attributes as $attribute ) {
        if ( isset( $context[ $attribute ] ) && ! is_array( $context[ $attribute ] ) ) {
            $html = $attribute;

            if ( $context[ $attribute ] !== '1' ) {
                $html .= sprintf( '="%s"', $context[ $attribute ] );
            }

            $attributes[] = $html;
        }
    }

    // If we have an array of sources, set them up as <source> elements
    if ( isset( $context['src'] ) && is_array( $context['src'] ) ) {
        $sources = [];

        foreach ( $context['src'] as $source ) {
            $sources[] = sprintf( '<source src="%s" type="%s">', $source['src'], $source['type'] );
        }

        $context['multiple_src'] = true;
        $context['src'] = implode( PHP_EOL, $sources );
        unset( $attributes['src'] );
    }

    $context['attributes'] = implode( ' ', $attributes );

	return $context;
} );