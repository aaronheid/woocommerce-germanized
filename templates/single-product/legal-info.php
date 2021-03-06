<?php
/**
 * Single Product Tax Info
 *
 * @author 		Vendidero
 * @package 	WooCommerceGermanized/Templates
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;
?>
<div class="legal-price-info">
	<p class="wc-gzd-additional-info">
		<?php if ( $product->get_tax_info() && get_option( 'woocommerce_gzd_display_product_detail_tax_info' ) == 'yes' ) : ?>
			<span class="wc-gzd-additional-info tax-info"><?php echo $product->get_tax_info(); ?></span>
		<?php endif; ?>
		<?php if ( $product->get_shipping_costs_html() && get_option( 'woocommerce_gzd_display_product_detail_shipping_costs' ) == 'yes' ) : ?>
			<span class="wc-gzd-additional-info shipping-costs-info"><?php echo $product->get_shipping_costs_html();?></span>
		<?php endif; ?>
	</p>
</div>