<?php

use Resknow\Assets;

add_filter( 'twilight.component.Goform.present', function( $context ) {
    Assets::add( 'script', 'goform', 'https://goform.app/wc.js' );
    return $context;
} );