<?php

/**
 * This is an example of a Component that grabs it's own data and can
 * accept props to manipulate the output.
 *
 * This component accepts a "limit" prop that will limit the number of
 * posts that are returned. The default value is 3.
 *
 * e.g. <RecentPosts limit="5" /> will return 5 posts, if there are
 * at least 5 posts to return.
 */

add_filter( 'twilight.component.RecentPosts', function( $context ) {

	// Setup the query
	$query = [
		'post_type' => 'post',
		'posts_per_page' => $context['limit'] ?? 3,
		'fields' => 'ids',
	];

	// If the exclude prop has some IDs, let's add them to the query
	if ( ! empty( $context['exclude'] ) ) {
		$query['post__not_in'] = explode( ',', $context['exclude'] );
	}

	$context['posts'] = get_posts($query);

	return $context;
} );
