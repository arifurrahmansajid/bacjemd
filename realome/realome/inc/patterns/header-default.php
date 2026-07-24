<?php
/**
 * Default header pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Header', 'realome' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
	<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"blockGap":"32px","padding":{"top":"32px","bottom":"32px"}}},"layout":{"inherit":false}} -->
<header class="wp-block-group alignfull" style="padding-top:32px;padding-bottom:32px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":168,"shouldSyncIcon":false,"className":"is-style-default"} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ref":1887,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"blockGap":"48px"}}} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group -->',
);
