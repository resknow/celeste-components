<?php

add_filter( 'twilight.component.Marquee', function( $context ) {

    $inline_styles = [];

    if ( isset( $context['gap'] ) ) {
        $inline_styles[] = sprintf( '--marquee-gap: %s', $context['gap'] );
    }

    if ( isset( $context['speed'] ) ) {
        $inline_styles[] = sprintf( '--marquee-speed: %s', $context['speed'] );
    }

    $styles = !empty( $inline_styles ) ? implode( ';', $inline_styles ) : null;

    if ( $styles ) {
        $context['styles'] = sprintf( 'style="%s"', $styles );
    }

	return $context;
} );