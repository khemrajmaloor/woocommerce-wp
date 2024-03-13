<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();

/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
//do_action('woocommerce_before_main_content');
?>

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-12">
            <?php
            // Moved add_action outside the loop
            add_action('woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20);
            
            while (have_posts()) {
                the_post();
                wc_get_template_part('content', 'single-product');
            }; // end of the loop. 
            ?>
        </div>
        <!-- <div class="col-lg-4"> -->
        <!-- Placeholder for sidebar or additional content -->
        <!-- </div> -->
    </div>
</div>

<?php
get_footer();
