<?php

if (! isset($prefix)) {
	$prefix = '';
	$initial_prefix = '';
} else {
	$initial_prefix = $prefix;
	$prefix = $prefix . '_';
}

$options = [
	$prefix . 'has_pagination' => [
		'label' => __( 'Pagination', 'blocksy' ),
		'type' => 'ct-panel',
		'switch' => true,
		'value' => 'yes',
		'sync' => blocksy_sync_whole_page([
			'prefix' => $prefix,
			'loader_selector' => '#primary.content-area section'
		]),
		'inner-options' => [

			blocksy_rand_md5() => [
				'title' => __( 'General', 'blocksy' ),
				'type' => 'tab',
				'options' => [

					$prefix . 'pagination_global_type' => [
						'label' => __( 'Pagination Type', 'blocksy' ),
						'type' => 'ct-select',
						'value' => 'simple',
						'view' => 'text',
						'design' => 'inline',
						'choices' => blocksy_ordered_keys(
							[
								'simple' => __( 'Standard', 'blocksy' ),
								'next_prev' => __( 'Next/Prev', 'blocksy' ),
								'load_more' => __( 'Load More', 'blocksy' ),
								'infinite_scroll' => __( 'Infinite Scroll', 'blocksy' ),
							]
						),

						'sync' => [
							'selector' => '.ct-pagination',
							'prefix' => $prefix,
							'render' => function ($args) {
								echo blocksy_display_posts_pagination();
							}
						]
					],

					blocksy_rand_md5() => [
						'type' => 'ct-condition',
						'condition' => [
							$prefix . 'pagination_global_type' => 'load_more'
						],
						'options' => [

							$prefix . 'load_more_label' => [
								'label' => __( 'Label', 'blocksy' ),
								'type' => 'text',
								'design' => 'inline',
								'value' => __( 'Load More', 'blocksy' ),
								'sync' => 'live',
							],

						],
					],

					blocksy_rand_md5() => [
						'type' => 'ct-divider',
						'attr' => [ 'data-type' => 'small' ],
					],

					$prefix . 'paginationSpacing' => [
						'label' => __( 'Pagination Top Spacing', 'blocksy' ),
						'type' => 'ct-slider',
						'min' => 0,
						'max' => 200,
						'responsive' => true,
						'value' => [
							'mobile' => 50,
							'tablet' => 60,
							'desktop' => 80,
						],
						'sync' => 'live',
					],

				],
			],

			blocksy_rand_md5() => [
				'title' => __( 'Design', 'blocksy' ),
				'type' => 'tab',
				'options' => [

					blocksy_rand_md5() => [
						'type' => 'ct-condition',
						'condition' => [
							$prefix . 'pagination_global_type' => 'simple|next_prev'
						],
						'options' => [

							$prefix . 'simplePaginationFontColor' => [
								'label' => __( 'Colors', 'blocksy' ),
								'type'  => 'ct-color-picker',
								'design' => 'inline',
								'value' => [
									'default' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],

									'active' => [
										'color' => '#ffffff',
									],

									'hover' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],
								],
								'sync' => 'live',

								'pickers' => [
									[
										'title' => __( 'Text Initial', 'blocksy' ),
										'id' => 'default',
										'inherit' => 'var(--color)'
									],

									[
										'title' => __( 'Text Active', 'blocksy' ),
										'id' => 'active',
										'condition' => [ $prefix . 'pagination_global_type' => 'simple' ]
									],

									[
										'title' => __( 'Accent', 'blocksy' ),
										'id' => 'hover',
										'inherit' => 'var(--linkHoverColor)'
									],
								],
							],

						],
					],

					blocksy_rand_md5() => [
						'type' => 'ct-condition',
						'condition' => [
							$prefix . 'pagination_global_type' => 'load_more'
						],
						'options' => [

							$prefix . 'paginationButtonText' => [
								'label' => __( 'Font Color', 'blocksy' ),
								'type'  => 'ct-color-picker',
								'design' => 'inline',
								'sync' => 'live',
								'value' => [
									'default' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],

									'hover' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],
								],

								'pickers' => [
									[
										'title' => __( 'Initial', 'blocksy' ),
										'id' => 'default',
										'inherit' => 'var(--buttonTextInitialColor)'
									],

									[
										'title' => __( 'Hover', 'blocksy' ),
										'id' => 'hover',
										'inherit' => 'var(--buttonTextHoverColor)'
									],
								],
							],

							$prefix . 'paginationButton' => [
								'label' => __( 'Button Color', 'blocksy' ),
								'type'  => 'ct-color-picker',
								'design' => 'inline',
								'sync' => 'live',
								'value' => [
									'default' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],

									'hover' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
									],
								],

								'pickers' => [
									[
										'title' => __( 'Initial', 'blocksy' ),
										'id' => 'default',
										'inherit' => 'var(--buttonInitialColor)'
									],

									[
										'title' => __( 'Hover', 'blocksy' ),
										'id' => 'hover',
										'inherit' => 'var(--buttonHoverColor)'
									],
								],
							],

						],
					],

					blocksy_rand_md5() => [
						'type' => 'ct-condition',
						'condition' => [
							$prefix . 'pagination_global_type' => '!infinite_scroll'
						],
						'options' => [

							$prefix . 'paginationDivider' => [
								'label' => __( 'Divider', 'blocksy' ),
								'type' => 'ct-border',
								'design' => 'inline',
								'divider' => 'top',
								'sync' => 'live',
								'value' => [
									'width' => 1,
									'style' => 'none',
									'color' => [
										'color' => 'rgba(224, 229, 235, 0.5)',
									],
								]
							],

						],
					],

				],
			],
		],
	],
];
