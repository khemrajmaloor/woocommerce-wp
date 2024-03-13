<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Template Name: All Products
 */

get_header();

$taxonomy = 'product_cat';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));

$bannerTwo = [ 
  'row_reverse' => 'rv',
  'bg_img'      => get_template_directory_uri() . '/assets/img/hero/hero-banner-4.jpg'
];

?>

<div id="inner-content">
  <?php get_template_part( 'template-parts/template', 'banner' ); ?>
  <?php get_template_part( 'template-parts/template', 'banner', $args = $bannerTwo ); ?>
</div>

<?php get_footer(); ?>

