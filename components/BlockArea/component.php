<?php

add_filter( 'twilight.component.BlockArea', function( $context ) {

    [ $props, $rest ] = props( 'BlockArea', $context, include __DIR__ . '/prop-types.php' );
    $context = array_merge( $context, $props );
    $context['attributes'] = attributes($rest);

	$block_area = $context['name'] ?? '';

    if ( is_null($block_area) || $block_area === '' || $block_area === 'none' ) return $context;

    $block_areas = get_posts_with_fields([
        'post_type' => 'block_area',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'meta_key' => 'block_area',
        'meta_value' => esc_attr( $block_area )
    ]);

	if ( !$block_areas ) return $context;

	$context['block_areas'] = [];

	foreach ( $block_areas as $block_area ) {
		$context['block_areas'][] = [
			'id' => $block_area->ID,
			'content' => $block_area->post_content
		];
	}

	return $context;
} );