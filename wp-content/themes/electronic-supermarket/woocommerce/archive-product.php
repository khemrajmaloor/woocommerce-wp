<?php
/**
 * 
 * It is important file of theme don't delete file without senior permission
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<main id="tp_content" role="main">
	<div class="container">
		<div class="row">
			<?php if( get_theme_mod( 'electronic_supermarket_product_sidebar',true) != '') { ?>
				<div id="theme-sidebar" class="col-lg-3 col-md-4"> <?php
					// Sidebar call here.
					do_action( 'woocommerce_sidebar' ); ?>
				</div>
			<?php }?>
			<div class="<?php if(get_theme_mod('electronic_supermarket_product_sidebar',true)) { ?>col-lg-9 col-md-8" <?php } else { ?>col-lg-12 col-md-12" <?php } ?> > <?php
				
				if ( woocommerce_product_loop() ) {
					do_action( 'woocommerce_before_shop_loop' );
					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'woocommerce_shop_loop' );
							wc_get_template_part( 'content', 'product' );
						}
					}

					woocommerce_product_loop_end();
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					
					do_action( 'woocommerce_no_products_found' );
				}
				do_action( 'woocommerce_after_main_content' ); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer( 'shop' );