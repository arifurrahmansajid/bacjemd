<?php
/**
 * Formats Grid Pattern
 *
 * @package Realome
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( '03. Every Format We Convert Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-formats-section","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-formats-section" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">

	<!-- wp:group {"align":"wide","className":"vhs-formats-header","style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide vhs-formats-header" style="margin-bottom:44px">
		<!-- wp:heading {"level":2,"className":"vhs-section-title"} -->
		<h2 class="wp-block-heading vhs-section-title">Every Format, Preserved by <span style="color:#39B7EC">Hand</span>.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"vhs-section-subtitle"} -->
		<p class="vhs-section-subtitle">Each service has its own dedicated studio process — cleaned, converted, and quality-checked one item at a time in Hollywood, FL.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"vhs-formats-grid","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide vhs-formats-grid">

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="6" width="19" height="12" rx="2"></rect><circle cx="8" cy="12" r="2"></circle><circle cx="16" cy="12" r="2"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">VHS &amp; Video Tapes</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Every tape digitized by hand in crisp 4K — from $18 per tape.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="1.5"></circle><circle cx="12" cy="7" r="1.6"></circle><circle cx="12" cy="17" r="1.6"></circle><circle cx="7" cy="12" r="1.6"></circle><circle cx="17" cy="12" r="1.6"></circle></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">8mm &amp; Super 8 Film</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Frame-by-frame 5K scans that make old reels look new.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="5.5" width="19" height="13" rx="2"></rect><circle cx="8.5" cy="11.5" r="2"></circle><circle cx="15.5" cy="11.5" r="2"></circle><path d="M7 18.5l1.5-3h7l1.5 3"></path></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">Cassettes &amp; Audio</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Voices and mixtapes rescued, mastered, and preserved.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="15" rx="2"></rect><circle cx="9" cy="10" r="1.7"></circle><path d="M3 16.5l5-4 4 3 4-3.5 5 4.5"></path></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">Photos &amp; Slides</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Archival-quality scans from $0.72 per photo or slide.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="7" width="13" height="10" rx="2"></rect><path d="M15.5 10.5l6-2.5v8l-6-2.5"></path><circle cx="9" cy="12" r="2.2"></circle></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">MiniDV &amp; Camcorder Tapes</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Hi8, Digital8, MiniDV, DVCAM, HDV — handled like the originals they are.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card">
			<!-- wp:html -->
			<div class="vhs-card-icon-box"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8.5" width="18" height="11" rx="2"></rect><rect x="2" y="4.5" width="20" height="4" rx="1.2"></rect><line x1="9.5" y1="13" x2="14.5" y2="13"></line></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">White-Glove Archiving</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">Your whole family archive, organized end to end.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">View service &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card vhs-format-card-dark","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card vhs-format-card-dark">
			<!-- wp:html -->
			<span class="vhs-exclusive-badge">EXCLUSIVE</span>
			<div class="vhs-card-icon-box vhs-card-icon-box-dark"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"></rect><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"></path><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"></line><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"></line></svg></div>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"vhs-card-title"} -->
			<h3 class="wp-block-heading vhs-card-title">Living Memories</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"vhs-card-desc"} -->
			<p class="vhs-card-desc">An in-home documentary of your life story — your voice on camera, your digitized memories woven in. From $1,800.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vhs-card-link"} -->
			<p class="vhs-card-link"><a href="#">Explore Living Memories &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-format-card vhs-format-card-dashed","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-format-card vhs-format-card-dashed">
			<!-- wp:paragraph {"className":"vhs-dashed-link"} -->
			<p class="vhs-dashed-link"><a href="#">See all services &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
