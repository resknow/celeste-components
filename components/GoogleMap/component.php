<?php

// Do something before the component is rendered, like manipulating the context
add_filter( 'twilight.component.GoogleMap', function( $context ) {

    // If no address is set, use the address from the options page
    if ( ! isset( $context['address'] ) && $address = get_field( 'address', 'option' ) ) {
        $context['address'] = sprintf(
            '%s, %s',
            get_field( 'company_name', 'option' ),
            $address
        );
    }

	return $context;
} );