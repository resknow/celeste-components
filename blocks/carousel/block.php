<?php

add_filter( 'theme.block.carousel', function( $context ) {
    $context['template'] = esc_attr( json_encode( [ [
        'acf/carousel-item',
        [],
        [
            [ 'core/cover' ]
        ]
    ] ] ) );
    return $context;
} );