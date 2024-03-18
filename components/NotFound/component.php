<?php

$text_options = [
	'serious' => 'The page you are trying to access cannot be found. It seems that we have encountered a technical issue or the content may no longer exist. Our team has been notified and is diligently working to resolve the problem. In the meantime, please return to our homepage or use the navigation menu to find the information you are looking for. Thank you for your patience and understanding.',
	'fun' => 'Oops! Looks like you\'ve stumbled upon a page that doesn\'t exist. Don\'t worry, we won\'t let you get lost in the digital abyss! Our team of tech-savvy adventurers is already on the case, searching high and low for the missing content. In the meantime, why not take a break and enjoy a virtual dance-off with our pixelated mascot? Just click on the homepage button and let the groove begin! We promise to have things up and running in no time. Hang in there!',
	'whimsey' => 'Oh, dear! It seems you\'ve taken a detour into the land of lost pages. Don\'t fret, though. We\'re here to bring you back to digital civilization. Our tech wizards are currently waving their magic wands to conjure up the missing content. While you wait, why not enjoy a cup of virtual tea and indulge in some online window shopping? Rest assured, we\'ll have you back on track in a jiffy. Keep calm and keep clicking!',
	'simple' => 'The page you\'re trying to reach has vanished into thin air. We\'re aware of the issue and are working diligently to fix it. In the meantime, please navigate back to our homepage and explore the other content we have available.'
];

add_filter( 'twilight.component.NotFound', function( $context ) use ( $text_options ) {
	$style = $context['props']['variant'] ?? 'simple';
	$context['text'] = $text_options[ $style ];
	return $context;
} );