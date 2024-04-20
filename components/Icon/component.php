<?php

use Resknow\Icon;

add_filter( 'twilight.component.Icon', function( $context ) {

    /**
     * Define Prop Types and split props from the rest of the context
     */
    [ $props, $rest ] = props( 'Icon', $context, include __DIR__ . '/prop-types.php' );

    /**
     * Merge the validated props back into the context
     * This will also set default values, if they've been defined in
     * the prop-types.php file.
     */
    $context = array_merge( $context, $props );

    /**
     * Format the rest of the attributes so we can add them to the
     * component as HTML attributes.
     *
     * This allows us to pass arbitrary attributes to the component
     * like `aria-label`, `data-foo`, etc.
     */
    $attributes = attributes($rest);

    dump($attributes);

    $context['svg'] = Icon::render( $context['name'] );
    $context['svg'] = str_replace( '<svg ', sprintf( '<svg %s', $attributes ), $context['svg'] );

    return $context;
} );