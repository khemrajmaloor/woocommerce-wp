<?php
defined( 'ABSPATH' ) || exit;

global $product;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="sp">
  <div class="sp__container">
    <div class="sp__container__content">
      
      <div class="sp__grid">
        <!-- product images -->
        <div class="sp__grid__items images">
          <?php do_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10); ?>
        </div>
        
        <div class="sp__grid__items content">
          <?php do_action( 'woocommerce_single_product_summary'); ?>
          <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
        </div>
      </div>
      <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>
  </div>
</div>
