<?php
/**
 * Format Banner Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '02. Format Ribbon Banner', 'realome' ),
	'categories' => array( 'vhs-sections' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#e0f2fe","text":"#0369a1"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#e0f2fe;color:#0369a1;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Looking for regular VHS tapes? <a href="#" style="color:#0284c7;text-decoration:underline">See our VHS to Digital Service</a> &nbsp;|&nbsp; Looking for 8mm/Super8 film? <a href="#" style="color:#0284c7;text-decoration:underline">See our Film Transfer Service</a> &nbsp;|&nbsp; Looking for audio cassettes or vinyl? <a href="#" style="color:#0284c7;text-decoration:underline">See Audio Transfer Service</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
