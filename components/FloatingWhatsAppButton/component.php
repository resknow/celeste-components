<?php

add_filter( 'twilight.component.FloatingWhatsAppButton', function( $context ) {
    $context['number'] = '44' . preg_replace( '/\s/', '', ltrim( $context['number'], '0' ) );
    return $context;
} );