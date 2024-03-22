<?php

add_filter( 'twilight.component.PostCard', function( $context ) {

    props( 'PostCard', $context, [
        'id' => [ 'type' => 'number' ]
    ] );

    if ( get_post_status( $context['id'] ) === false ) {
        celeste_warn( sprintf( '<code>`PostCard`</code> Post with ID <code>`%s`</code> does not exist.', $context['id'] ) );
    }

    $context['post'] = get_full_post( $context['id'] );

    return $context;
} );