<?php
/**
 * Hero Dark Pattern
 *
 * @package Realome
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( '01. Client Homepage Hero Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#16324F","text":"#ffffff"},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#16324F;color:#ffffff;padding-top:60px;padding-right:24px;padding-bottom:60px;padding-left:24px">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:40px">
		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"level":4,"style":{"color":{"text":"#39B7EC"},"typography":{"fontStyle":"normal","fontWeight":"800","letterSpacing":"0.16em"}},"fontSize":"extra-small"} -->
			<h4 class="wp-block-heading has-text-color has-extra-small-font-size" style="color:#39B7EC;font-style:normal;font-weight:800;letter-spacing:0.16em">PREMIUM MEMORY DIGITIZATION · HOLLYWOOD, FL</h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.06","fontWeight":"800"},"spacing":{"margin":{"top":"16px","bottom":"22px"}}}} -->
			<h1 class="wp-block-heading" style="font-weight:800;line-height:1.06;margin-top:16px;margin-bottom:22px">Your Memories, Preserved <span style="color:#39B7EC">Forever</span>.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.82)"},"spacing":{"margin":{"bottom":"32px"}}},"fontSize":"medium"} -->
			<p class="has-text-color has-medium-font-size" style="color:rgba(255,255,255,0.82);margin-bottom:32px">Memory Converter is the white-glove digital media converter that turns your old VHS tapes, film reels, photos, and audio into crisp digital you can watch, share, and keep for good.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"26px"}}}} -->
			<div class="wp-block-buttons" style="margin-bottom:26px">
				<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"12px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:12px;background-color:#436DA5;color:#ffffff">Get a Free Quote</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#39B7EC"},"border":{"radius":"12px","color":"#39B7EC","width":"1.5px"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="border-color:#39B7EC;border-width:1.5px;border-radius:12px;color:#39B7EC">See How It Works</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.66)"}},"fontSize":"small"} -->
			<p class="has-text-color has-small-font-size" style="color:rgba(255,255,255,0.66)">Handled 100% in-house in Hollywood, FL &nbsp;<span style="color:#39B7EC">·</span>&nbsp; Insured, tracked shipping &nbsp;<span style="color:#39B7EC">·</span>&nbsp; Free return of your originals</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"className":"vhs-hero-media-box","style":{"color":{"background":"#1E3A5C"},"spacing":{"padding":{"top":"120px","bottom":"90px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group vhs-hero-media-box has-background" style="background-color:#1E3A5C;padding-top:120px;padding-right:20px;padding-bottom:90px;padding-left:20px">
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.6)"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-text-color has-small-font-size" style="color:rgba(255,255,255,0.6)">photo — family watching digitized home movies</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"vhs-hero-badge","style":{"color":{"background":"#ffffff"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group vhs-hero-badge has-background" style="background-color:#ffffff">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/check.svg" alt="Check"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"color":{"text":"#16324F"},"typography":{"fontWeight":"800"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#16324F;font-weight:800">Digitized by hand in 4K/5K — Never outsourced overseas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"vhs-hero-format-pills"} -->
	<div class="wp-block-columns alignwide vhs-hero-format-pills">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/vhs.svg" alt="VHS"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontWeight":"700"}},"fontSize":"extra-small"} -->
			<p class="has-text-color has-extra-small-font-size" style="color:rgba(255,255,255,0.85);font-weight:700">VHS &amp; Video</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/film.svg" alt="Film"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontWeight":"700"}},"fontSize":"extra-small"} -->
			<p class="has-text-color has-extra-small-font-size" style="color:rgba(255,255,255,0.85);font-weight:700">8mm &amp; Super 8 Film</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/photo.svg" alt="Photo"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontWeight":"700"}},"fontSize":"extra-small"} -->
			<p class="has-text-color has-extra-small-font-size" style="color:rgba(255,255,255,0.85);font-weight:700">Photos &amp; Slides</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/cassette.svg" alt="Cassette"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontWeight":"700"}},"fontSize":"extra-small"} -->
			<p class="has-text-color has-extra-small-font-size" style="color:rgba(255,255,255,0.85);font-weight:700">Cassettes &amp; Audio</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( $theme_uri ) . '/assets/icons/cam.svg" alt="Camcorder"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontWeight":"700"}},"fontSize":"extra-small"} -->
			<p class="has-text-color has-extra-small-font-size" style="color:rgba(255,255,255,0.85);font-weight:700">MiniDV &amp; Camcorder</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
