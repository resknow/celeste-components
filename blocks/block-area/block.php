<?php

use Resknow\Context;

add_filter( 'acf/load_field/name=block_area_name', function( $field ) {

	$block_areas = Context::get( 'blocks.areas' );
    $choices = [
        'none' => 'No Block Areas Found'
    ];

	if ( empty( $block_areas ) ) {
		return $field;
	}

	foreach( $block_areas as $block_area ) {
		$choices[ $block_area ] = block_area_name( $block_area );
	}

    $choices['none'] = 'Select a Block Area';
    $field['choices'] = $choices;

    return $field;
} );