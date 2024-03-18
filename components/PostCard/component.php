<?php

add_filter( 'twilight.component.PostCard', function( $context ) {
    $context['post'] = get_full_post( $context['id'] );
    return $context;
} );