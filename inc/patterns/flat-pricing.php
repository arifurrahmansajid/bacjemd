<?php
/**
 * Flat Pricing Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '05. Flat Pricing Table', 'realome' ),
	'categories' => array( 'vhs-sections' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull" style="padding-top:60px;padding-right:24px;padding-bottom:60px;padding-left:24px">
	<!-- wp:heading {"level":2,"align":"wide","style":{"color":{"text":"#1e293b"},"spacing":{"margin":{"bottom":"30px"}}}} -->
	<h2 class="wp-block-heading alignwide has-text-color" style="color:#1e293b;margin-bottom:30px">Simple, <span style="color:#0284c7">Flat</span> Pricing.</h2>
	<!-- /wp:heading -->

	<!-- wp:table {"align":"wide","className":"is-style-stripes","style":{"border":{"width":"1px","style":"solid","color":"#cbd5e1","radius":"8px"}}} -->
	<figure class="wp-block-table alignwide is-style-stripes" style="border-color:#cbd5e1;border-style:solid;border-width:1px;border-radius:8px">
		<table class="has-fixed-layout">
			<thead>
				<tr style="background-color:#112a46;color:#ffffff">
					<th style="padding:16px">ITEM</th>
					<th style="padding:16px">WHAT\'S INCLUDED</th>
					<th style="padding:16px;text-align:right">PRICE</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="padding:16px;font-weight:700">VHS-C Transfer</td>
					<td style="padding:16px">Full length clean transfer, digital MP4 delivery for 1 tape</td>
					<td style="padding:16px;font-weight:700;text-align:right;color:#0284c7">$25 / tape</td>
				</tr>
				<tr>
					<td style="padding:16px;font-weight:700">S-VHS-C Transfer</td>
					<td style="padding:16px">Super VHS-C HD clean transfer, digital MP4 file for 1 tape</td>
					<td style="padding:16px;font-weight:700;text-align:right;color:#0284c7">$25 / tape</td>
				</tr>
				<tr>
					<td style="padding:16px;font-weight:700">USB Drive Media</td>
					<td style="padding:16px">Custom 32GB / 64GB USB 3.0 flash drive for video storage</td>
					<td style="padding:16px;font-weight:700;text-align:right;color:#0284c7">$15 / drive</td>
				</tr>
			</tbody>
		</table>
	</figure>
	<!-- /wp:table -->

	<!-- wp:paragraph {"align":"wide","style":{"color":{"text":"#64748b"}}} -->
	<p class="alignwide has-text-color" style="color:#64748b">Every transfer includes blank space trimming and time-based stabilization. No hidden fees or per-minute charges. Volume discounts available for 10+ tapes.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
