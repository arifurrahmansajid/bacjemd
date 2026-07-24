<?php
/**
 * Default footer
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Footer', 'realome' ),
	'categories' => array( 'realome', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"48px","bottom":"0px"}}},"backgroundColor":"foreground","textColor":"white","layout":{"inherit":true}} -->
<div class="wp-block-group has-white-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:48px;padding-bottom:0px"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"65px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:65px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"48px"}}}} -->
<div class="wp-block-column" style="padding-top:48px"></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px"}}}} -->
<div class="wp-block-column" style="padding-top:48px"></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px"}}}} -->
<div class="wp-block-column" style="padding-top:48px"></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px"}}}} -->
<div class="wp-block-column" style="padding-top:48px"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"opacity":"css","style":{"color":{"background":"#565656"}},"className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-css-opacity has-background alignwide is-style-wide" style="background-color:#565656;color:#565656"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"bottom":"16px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-bottom:16px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"16px","bottom":"24px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:16px;padding-bottom:24px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© 2022 Energetic Themes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"16px","bottom":"32px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:16px;padding-bottom:32px"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
