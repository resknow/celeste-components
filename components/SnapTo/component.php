<?php

add_filter( 'twilight.component.SnapTo', function( $context ) {

    if ( version_compare( $context['utils']['theme_version'], '1.1.0', '<' ) ) {
        /**
         * Define Prop Types and split props from the rest of the context
         */
        [ $props, $rest ] = props( 'SnapTo', $context, include __DIR__ . '/prop-types.php' );
        $context = array_merge( $context, $props );
        $context['attributes'] = attributes($rest);
    }

    return $context;
} );