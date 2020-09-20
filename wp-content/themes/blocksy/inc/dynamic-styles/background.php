<?php

// Site background
blocksy_output_background_css([
	'selector' => 'body',
	'css' => $css,
	'value' => get_theme_mod(
		'site_background',
		blocksy_background_default_value([
			'backgroundColor' => [
				'default' => [
					'color' => '#f8f9fb'
				],
			],
		])
	)
]);

