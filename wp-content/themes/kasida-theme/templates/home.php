<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

/**
 * Template Name: Home
 */

/**
 * 
 * It is an important theme file.
 * Do not delete or modify it without concerning any expert.
 * 
 */

get_header();

$taxonomy = 'product_cat';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));

$bannerTwo = [ 
  'row_reverse' => 'rv',
  'bg_img'      => get_template_directory_uri() . '/assets/img/hero/hero-banner-4.jpg'
];

// Hero Section
get_template_part( 'template-parts/template', 'hero' );

?>

<div id="inner-content">
  <?php get_template_part( 'template-parts/template', 'banner' ); ?>
  <?php get_template_part( 'template-parts/template', 'banner', $args = $bannerTwo ); ?>
  <?php get_template_part( 'template-parts/template', 'banner' ); ?>
  <?php get_template_part( 'template-parts/template', 'banner', $args = $bannerTwo ); ?>
</div>

<?php get_footer(); ?>


