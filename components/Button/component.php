<?php

add_filter( 'twilight.component.Button', function( $context ) {

    /**
     * Define Prop Types and split props from the rest of the context
     */
    [ $props, $rest ] = props( 'Button', $context, include __DIR__ . '/prop-types.php' );

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
    $context['attributes'] = attributes($rest);

    return $context;
} );