<?php
/**
 * Default footer pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Footer', 'realome' ),
	'categories' => array( 'realome', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => <<<'BLOCK'
<!-- wp:group {"align":"full","className":"vhs-main-footer","style":{"spacing":{"padding":{"top":"64px","bottom":"28px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-main-footer" style="padding-top:64px;padding-right:24px;padding-bottom:28px;padding-left:24px">
	<!-- wp:columns {"align":"wide","className":"vhs-footer-grid","style":{"spacing":{"blockGap":"48px","margin":{"bottom":"44px"}}}} -->
	<div class="wp-block-columns alignwide vhs-footer-grid" style="margin-bottom:44px">

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:paragraph {"className":"vhs-footer-brand"} -->
			<p class="vhs-footer-brand"><span style="color:#FFFFFF">Memory</span> <span style="color:#39B7EC">Converter</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vhs-footer-tagline"} -->
			<p class="vhs-footer-tagline">White-glove memory digitization, handled by hand in Hollywood, FL &#8212; never overseas.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vhs-footer-rating"} -->
			<p class="vhs-footer-rating"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5.0 on Google</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vhs-footer-rating"} -->
			<p class="vhs-footer-rating"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5.0 on Yelp</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":3,"className":"vhs-footer-col-title"} -->
			<h3 class="wp-block-heading vhs-footer-col-title">SERVICES</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">VHS to Digital</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">8mm &amp; Super 8 Film</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Cassette to CD &amp; Digital</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Photo Scanning &amp; Restoration</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">DVD to Digital</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#" style="color:#39B7EC">Living Memories</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":3,"className":"vhs-footer-col-title"} -->
			<h3 class="wp-block-heading vhs-footer-col-title">COMPANY</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">How It Works</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Reviews</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Areas Served</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Compare Us</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Guides</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-footer-link"} -->
			<p class="vhs-footer-link"><a href="#">Reel Revival Blog</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":3,"className":"vhs-footer-col-title"} -->
			<h3 class="wp-block-heading vhs-footer-col-title">VISIT THE STUDIO</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-footer-address"} -->
			<p class="vhs-footer-address">6630 Meade Street<br>Hollywood, FL 33024</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vhs-footer-phone"} -->
			<p class="vhs-footer-phone"><a href="tel:754-276-1601">&#128222; 754-276-1601</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<div class="vhs-footer-socials">
				<a href="#" aria-label="Facebook">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
				</a>
				<a href="#" aria-label="Yelp">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-5l-3.5 2 3.5 3zm2 0l3.5-3-3.5-2v5zm-1-7V5l-4.5 4.5L10 11l2-1.5zm2 0L16.5 9.5 12 5v4.5l2 1.5z"/></svg>
				</a>
				<a href="#" aria-label="Instagram">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"vhs-footer-divider"} -->
	<hr class="wp-block-separator vhs-footer-divider" />
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","className":"vhs-footer-bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide vhs-footer-bottom">
		<!-- wp:paragraph {"className":"vhs-footer-copy"} -->
		<p class="vhs-footer-copy">&#169; 2026 Memory Converter &middot; Hollywood, FL</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<div class="vhs-footer-bottom-links">
			<a href="#">Privacy</a>
			<a href="#">Terms</a>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
BLOCK,
);
