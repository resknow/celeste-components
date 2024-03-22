<?php

add_filter( 'twilight.component.PostCard', function( $context ) {

    if ( version_compare( $context['utils']['theme_version'], '1.1.0', '<' ) ) {
        props( 'PostCard', $context, [
            'id' => [ 'type' => 'number' ]
        ] );
    }

    if ( get_post_status( $context['id'] ) === false ) {
        celeste_warn( sprintf( '<code>`PostCard`</code> Post with ID <code>`%s`</code> does not exist.', $context['id'] ) );
    }

    $context['post'] = get_post( $context['id'] );
    $context['post']->featured_image = get_post_thumbnail_id( $context['id'] );

    return $context;
} );