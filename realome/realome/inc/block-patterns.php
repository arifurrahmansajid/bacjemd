<?php
/**
 * Realome: Block Patterns
 *
 * @package Realome
 * @since Realome 1.0
 */

if ( ! function_exists( 'realome_register_block_patterns' ) ) :

	/**
	 * Registers block patterns and categories.
	 *
	 * @since Realome 1.0
	 *
	 * @return void
	 */
	function realome_register_block_patterns() {
		$block_pattern_categories = array(
			'realome' => array( 'label' => __( 'Realome', 'realome' ) ),
			'featured' => array( 'label' => __( 'Featured', 'realome' ) ),
			'footer'  => array( 'label' => __( 'Footers', 'realome' ) ),
			'header'  => array( 'label' => __( 'Headers', 'realome' ) ),
			'hero'  => array( 'label' => __( 'Hero', 'realome' ) ),
			'query'   => array( 'label' => __( 'Query', 'realome' ) ),
			'pages'    => array( 'label' => __( 'Pages', 'realome' ) ),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Realome 1.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'realome_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'footer-default',
			'header-default',
			'hero-four',
		);

		/**
		 * Filters the theme block patterns.
		 *
		 * @since Realome 1.0
		 *
		 * @param array $block_patterns List of block patterns by name.
		 */
		$block_patterns = apply_filters( 'realome_block_patterns', $block_patterns );

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

			register_block_pattern(
				'realome/' . $block_pattern,
				require $pattern_file
			);

		}

	}

endif;

add_action( 'init', 'realome_register_block_patterns', 9 );
