<?php

use Resknow\Assets;

/**
 * Get Initials from Name
 *
 * @param string $name
 * @return string
 */
function AvatarStack_get_initials_from_name( string $name ) {
    $words = explode(' ', $name);
    $initials = '';

    foreach ( $words as $word ) {
        $initials .= $word[0];
    }

    return $initials;
}

add_filter( 'twilight.component.AvatarStack.present', function( $context ) {

    add_action( 'wp_enqueue_scripts', function() {
        Assets::add( 'script', 'popper', 'https://unpkg.com/@popperjs/core@2' );
        Assets::add( 'script', 'tippy', 'https://unpkg.com/tippy.js@6' );
    } );

    return $context;
} );

add_filter( 'twilight.component.AvatarStack', function( $context ) {

    if ( isset( $context['avatars'] ) ) {
        $context['avatars'] = array_map( function( $avatar ) {
            $avatar['initials'] = AvatarStack_get_initials_from_name( $avatar['name'] );
            return $avatar;
        }, $context['avatars'] );
    }

    return $context;
} );