<?php
/**
 * Services pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Services', 'realome' ),
	'categories' => array( 'realome', 'cta' ),
	'content'    => '
	<!-- wp:group {"align":"wide","style":{"border":{"width":"2px","style":"solid","radius":"8px"},"spacing":{"padding":{"top":"96px","bottom":"96px","right":"24px","left":"24px"}}},"borderColor":"foreground","backgroundColor":"white"} -->
<div class="wp-block-group alignwide has-border-color has-foreground-border-color has-white-background-color has-background" style="border-radius:8px;border-style:solid;border-width:2px;padding-top:96px;padding-right:24px;padding-bottom:96px;padding-left:24px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"tertiary","fontSize":"small"} -->
<h6 class="has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px">We have got you covered.</h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"4px","bottom":"31px"}},"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size" style="line-height:1.2;margin-top:4px;margin-bottom:31px">Request a call back</h2>
<!-- /wp:heading -->

<!-- wp:wpforms/form-selector {"formId":"4145"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Your privacy is important to us. We’ll never share your information</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
