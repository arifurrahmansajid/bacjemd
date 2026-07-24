<?php
/**
 * Wall of Stories Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '08. Wall of Stories Reviews', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-stories-section","style":{"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-stories-section" style="padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">

	<!-- wp:group {"align":"wide","className":"vhs-stories-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide vhs-stories-header">
		<!-- wp:heading {"level":2,"className":"vhs-stories-title"} -->
		<h2 class="wp-block-heading vhs-stories-title">A Wall of <span style="color:#39B7EC">Stories</span>.</h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<div class="vhs-rating-badge">
			<span class="vhs-rating-stars">★★★★★</span>
			<span class="vhs-rating-text">5.0 on Google &amp; Yelp</span>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"vhs-stories-grid"} -->
	<div class="wp-block-group alignwide vhs-stories-grid">

		<!-- wp:group {"className":"vhs-review-card"} -->
		<div class="wp-block-group vhs-review-card">
			<!-- wp:html -->
			<div class="vhs-review-stars">★★★★★</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"vhs-review-text"} -->
			<p class="vhs-review-text">“My dad’s Super 8 reels from 1968 look better than I remembered them. I cried watching the very first file.”</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<div class="vhs-review-author">
				<div class="vhs-author-avatar"><span class="vhs-author-avatar-text">photo</span></div>
				<div>
					<div class="vhs-author-name">Marisol G.</div>
					<div class="vhs-author-location">Coral Gables</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-review-card"} -->
		<div class="wp-block-group vhs-review-card">
			<!-- wp:html -->
			<div class="vhs-review-stars">★★★★★</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"vhs-review-text"} -->
			<p class="vhs-review-text">“Forty VHS tapes, every one returned in perfect condition. The online gallery made sharing with my kids effortless.”</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<div class="vhs-review-author">
				<div class="vhs-author-avatar"><span class="vhs-author-avatar-text">photo</span></div>
				<div>
					<div class="vhs-author-name">David R.</div>
					<div class="vhs-author-location">Boca Raton</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-review-card"} -->
		<div class="wp-block-group vhs-review-card">
			<!-- wp:html -->
			<div class="vhs-review-stars">★★★★★</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"vhs-review-text"} -->
			<p class="vhs-review-text">“They restored the only photo I have of my grandmother — and let me review everything online before delivery.”</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<div class="vhs-review-author">
				<div class="vhs-author-avatar"><span class="vhs-author-avatar-text">photo</span></div>
				<div>
					<div class="vhs-author-name">Rachel S.</div>
					<div class="vhs-author-location">Hollywood</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
