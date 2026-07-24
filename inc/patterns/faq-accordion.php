<?php
/**
 * FAQ Accordion Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '09. FAQ Accordion', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-faq-section","style":{"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-faq-section" style="padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":"60px"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">
		<!-- wp:column {"width":"40%","verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"className":"vhs-faq-title"} -->
			<h2 class="wp-block-heading vhs-faq-title">Questions, <span style="color:#39B7EC">Answered</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-faq-desc"} -->
			<p class="vhs-faq-desc">Anything else? Call us — a real person in our Hollywood studio picks up.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<a href="tel:754-276-1601" class="vhs-faq-phone">
				<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round"><rect x="7" y="2.5" width="10" height="19" rx="2.5"></rect><line x1="10.5" y1="18.2" x2="13.5" y2="18.2"></line></svg>
				754-276-1601
			</a>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">
			<!-- wp:html -->
			<div class="vhs-faq-wrap">
				<div class="vhs-faq-item">
					<details open>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">What formats do you accept?</span>
							<span class="vhs-faq-toggle">−</span>
						</summary>
						<p class="vhs-faq-answer">VHS, VHS-C, S-VHS, Betamax, Hi8, Digital8, MiniDV and camcorder tapes; professional formats like U-matic, Betacam SP, Digital Betacam, DVCAM and HDV; 8mm and Super 8 film; photos, slides and negatives; cassettes, microcassettes and reel-to-reel; home-recorded DVDs, mini DVDs and CDs. Not sure what you have? Send us a photo and we’ll identify it.</p>
					</details>
				</div>

				<div class="vhs-faq-item">
					<details>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">How long does it take?</span>
							<span class="vhs-faq-toggle">+</span>
						</summary>
						<p class="vhs-faq-answer">Simple orders can be done in 24 hours; standard turnaround is 3 to 5 business days, and the largest family archives take about a week.</p>
					</details>
				</div>

				<div class="vhs-faq-item">
					<details>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">Is my media safe with you?</span>
							<span class="vhs-faq-toggle">+</span>
						</summary>
						<p class="vhs-faq-answer">100% safe. Every item is barcode-tracked upon receipt, stored in a secure climate-controlled facility, handled by hand with anti-static gloves, and returned safely to you.</p>
					</details>
				</div>

				<div class="vhs-faq-item">
					<details>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">Do you outsource any work overseas?</span>
							<span class="vhs-faq-toggle">+</span>
						</summary>
						<p class="vhs-faq-answer">Never. All digitizing and restoration work is handled 100% in-house at our Hollywood, FL studio by our experienced media archivists.</p>
					</details>
				</div>

				<div class="vhs-faq-item">
					<details>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">What files do I get back?</span>
							<span class="vhs-faq-toggle">+</span>
						</summary>
						<p class="vhs-faq-answer">You receive high-quality MP4 video files, archival uncompressed WAV audio, or high-res JPEG/TIFF image scans delivered via private cloud gallery, USB flash drive, or custom DVD.</p>
					</details>
				</div>

				<div class="vhs-faq-item">
					<details>
						<summary class="vhs-faq-head">
							<span class="vhs-faq-question">What does it cost?</span>
							<span class="vhs-faq-toggle">+</span>
						</summary>
						<p class="vhs-faq-answer">Tapes start at $18 per tape, film reels from $0.20 per foot, and photo scans from $0.72 per image. We offer transparent pricing with free custom quotes.</p>
					</details>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
