<?php

// Do something before the page is rendered, like enqueueing assets
add_filter( 'twilight.component.FileUpload.present', function( $context ) {

    // Note this is the parent template context, NOT the component context
    return $context;
} );

// Do something before the component is rendered, like manipulating the context
add_filter( 'twilight.component.FileUpload', function( $context ) {

    [ $props, $rest ] = props( 'FileUpload', $context, [] );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

	return $context;
} );