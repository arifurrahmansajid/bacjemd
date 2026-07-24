<?php
/**
 * Default Hero pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Hero One', 'realome' ),
	'categories' => array( 'hero', 'featured' ),
	'content'    => '
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"48px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:64px;padding-bottom:48px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"bottom":"32px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:32px"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"colossal"} -->
<h1 class="has-colossal-font-size" style="margin-top:0px;margin-bottom:16px">Find your next home</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mt-0"} -->
<p class="mt-0">It’s the future, and buying real estate is now real simple. You can buy a house or even rent a place to live anywhere in the world. The process is quick and easy, and you can do it from your phone!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"87px"} -->
<div class="wp-block-column" style="flex-basis:87px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"565px","style":{"spacing":{"padding":{"bottom":"32px"}}},"className":"flex"} -->
<div class="wp-block-column is-vertically-aligned-center flex" style="padding-bottom:32px;flex-basis:565px"><!-- wp:image {"sizeSlug":"large","className":"-mr-36 mt-24"} -->
<figure class="wp-block-image size-large -mr-36 mt-24"><img src="https://images.unsplash.com/photo-1617806265182-7b3f847f0b75?crop=entropy&amp;cs=tinysrgb&amp;fm=jpg&amp;ixlib=rb-1.2.1&amp;q=80&amp;raw_url=true&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=360&amp;h=360" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"mt-0"} -->
<figure class="wp-block-image size-large mt-0"><img src="https://images.unsplash.com/photo-1590912550141-1448da2bd5da?ixlib=rb-1.2.1&amp;raw_url=true&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=360&amp;h=360" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
);
