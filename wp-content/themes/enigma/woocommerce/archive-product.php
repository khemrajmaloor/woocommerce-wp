<?php
/**
 * 
 * This is important file of this theme.
 * It is archive page don't any thing without discuss senior.
 * 
 */
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
//  do_action( 'woocommerce_before_main_content' ); ?>


<div class="container pt-5">
	<div class="row">
        <div class="col-lg-3 "> 
			<div class="filter__siderbar"> <?php
				dynamic_sidebar( 'Main Sidebar' ); ?>
			</div> 
        </div>
        <div class="col-lg-9">
			<div class="shop__content">
			<div class="woocommerce-products-header">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                    <h3 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h3>
                <?php endif; ?>
                <?php do_action( 'woocommerce_archive_description' ); ?>
            </div>
            <?php
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
            ?>
			</div>
            
        </div>
    </div>
</div> <?php

do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
