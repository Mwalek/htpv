<?php
/*
  Plugin Name: Smartcrawl HowTo Property Values
  Plugin URI: https://mwale.me/
  Description: This plugin adds custom fields to WordPress. You can use the custom fields to add schema information to your HowTo posts in Smartcrawl SEO plugin.
  Version: 0.1
  Author: Mwale Kalenga
  Author URI: https://mwale.me/
*/

add_filter( 'rwmb_meta_boxes', 'm5_register_meta_boxes' );

function m5_register_meta_boxes( $meta_boxes ) {

	$prefix = 'm5_';

	$htpv_items = [
		
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Total Time', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'total_time',
			'desc'        => esc_html__( 'The total time required to perform all instructions or directions (including time to prepare the supplies), in ISO 8601 duration format.', 'smartcrawl-htpv' ),
			'placeholder' => esc_html__( 'PT1H30M', 'smartcrawl-htpv' ),
		],
		[
			'type' => 'divider',
		],
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Image', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'image',
			'desc'        => esc_html__( 'Image of the completed how-to. Images must be in .jpg, .png, or. gif format.', 'smartcrawl-htpv' ),
			'placeholder' => esc_html__( 'https://example.com/wp-content/uploads/2022/01/photo.jpg', 'smartcrawl-htpv' ),
		],
		[
			'type' => 'divider',
		],
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Estimated Cost Value', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'estimated_cost_value',
			'desc'        => esc_html__( 'The estimated cost of the supplies consumed when performing instructions.', 'smartcrawl-htpv' ),
			'placeholder' => 100,
		],
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Estimated Cost Currency', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'estimated_cost_currency',
			'desc'        => esc_html__( 'Use the currency acronym/abbreviation.', 'smartcrawl-htpv' ),
			'placeholder' => esc_html__( 'USD', 'smartcrawl-htpv' ),
		],
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Estimated Cost Max Value', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'estimated_cost_max_value',
			'desc'        => esc_html__( 'The estimated maximum cost of the supplies consumed when performing instructions.', 'smartcrawl-htpv' ),
			'placeholder' => 100,
		],
		[
			'type'        => 'text',
			'name'        => esc_html__( 'Estimated Cost Min Value', 'smartcrawl-htpv' ),
			'id'          => $prefix . 'estimated_cost_min_value',
			'desc'        => esc_html__( 'The estimated minimum cost of the supplies consumed when performing instructions.', 'smartcrawl-htpv' ),
			'placeholder' => 100,
		],
		[
			'type' => 'divider',
		]
	];

	for( $m = 1; $m < 11; $m++ ) {
		$affix = '_' . $m;

		$htpv_items = array_merge(
			$htpv_items,
			
			[
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Supply ' . $m, 'smartcrawl-htpv' ),
					'id'          => $prefix . 'supply' . $affix,
					'desc'        => esc_html__( 'A supply consumed when performing instructions or a direction.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'A plain paper', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Supply ' . $m . ' Image', 'smartcrawl-htpv' ),
					'id'          => $prefix . 'supply' . $affix . '_image',
					'desc'        => esc_html__( 'An image of the supply. Images must be in .jpg, .png, or. gif format.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'https://example.com/wp-content/uploads/2022/01/photo.jpg', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Tool ' . $m, 'smartcrawl-htpv' ),
					'id'          => $prefix . 'tool' . $affix,
					'desc'        => esc_html__( 'An object used (but not consumed) when performing instructions or a direction. ', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'pencil', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Tool ' . $m . ' Image', 'smartcrawl-htpv' ),
					'id'          => $prefix . 'tool' . $affix . '_image',
					'desc'        => esc_html__( 'An image of the tool. Images must be in .jpg, .png, or. gif format.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'https://example.com/wp-content/uploads/2022/01/photo.jpg', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Step ' . $m, 'smartcrawl-htpv' ),
					'id'          => $prefix . 'step' . $affix,
					'desc'        => esc_html__( 'A step in the instructions for how to achieve a result.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'Draw a straight line.', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Step ' . $m . ' Text', 'smartcrawl-htpv' ),
					'id'          => $prefix . 'step' . $affix . '_text',
					'desc'        => esc_html__( 'The full instruction text of this step.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'Draw a straight line using a pencil and ruler ..', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Step ' . $m . ' Image', 'smartcrawl-htpv' ),
					'id'          => $prefix . 'step' . $affix . '_image',
					'desc'        => esc_html__( 'An image for the step. Images must be in .jpg, .png, or. gif format.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'https://example.com/wp-content/uploads/2022/01/photo.jpg', 'smartcrawl-htpv' ),
				],
				[
					'type'        => 'text',
					'name'        => esc_html__( 'Step ' . $m . ' URL', 'smartcrawl-htpv' ),
					'id'          => $prefix . 'step' . $affix . '_url',
					'desc'        => esc_html__( 'A URL that directly links to the step (if one is available). For example, an anchor link fragment.', 'smartcrawl-htpv' ),
					'placeholder' => esc_html__( 'https://example.com/how-to-draw/#step-' . $m, 'smartcrawl-htpv' ),
				],
				[
					'type' => 'divider',
				],

			]

		);
	}

	$meta_boxes[] = [
		'title'   => esc_html__( 'How-to Property Values', 'smartcrawl-htpv' ),
		'id'      => 'smartcrawl_htpv',
		'context' => 'normal',
		'priority' => 'low',
		'fields'  => $htpv_items
	];

	return $meta_boxes;
}