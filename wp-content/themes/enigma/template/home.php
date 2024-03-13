<?php 
if ( ! defined('ABSPATH')){
    exit;  // Exist if accessed directly
}

/** 
 * template Name:home
 */ 

/**
 *
 * It is an Important file of this theme. 
 * Do not delete or modify it without concerning any expert.
 * 
 */

get_header();

/***
 * Get templates part here.
 */
get_template_part( 'template-parts/template','slider' );
get_template_part( 'template-parts/template','collection' );

get_footer();

?>