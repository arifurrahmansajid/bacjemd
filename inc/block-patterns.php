<?php
/**
 * Realome: Block Patterns
 *
 * @package Realome
 * @since Realome 1.0
 */

if ( ! function_exists( 'realome_register_block_patterns' ) ) :

	function realome_register_block_patterns() {
		$block_pattern_categories = array(
			'realome' => array( 'label' => __( 'Realome', 'realome' ) ),
			'vhs-sections' => array( 'label' => __( 'VHS Converter Sections', 'realome' ) ),
			'featured' => array( 'label' => __( 'Featured', 'realome' ) ),
			'footer'  => array( 'label' => __( 'Footers', 'realome' ) ),
			'header'  => array( 'label' => __( 'Headers', 'realome' ) ),
			'hero'  => array( 'label' => __( 'Hero', 'realome' ) ),
			'pages'    => array( 'label' => __( 'Pages', 'realome' ) ),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'hero-dark',
			'trust-ribbon',
			'format-banner',
			'formats-grid',
			'living-memories-spotlight',
			'how-it-works',
			'flat-pricing',
			'why-trust-us',
			'local-coverage',
			'wall-of-stories',
			'faq-accordion',
			'final-cta',
			'footer-default',
			'header-default',
			'hero-four',
		);

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );
			if ( file_exists( $pattern_file ) ) {
				register_block_pattern(
					'realome/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}

endif;

add_action( 'init', 'realome_register_block_patterns', 9 );
