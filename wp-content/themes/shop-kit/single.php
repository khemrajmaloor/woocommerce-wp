<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shop Kit 
 */

get_header();

$shop_kit_blog_container = get_theme_mod('shop_kit_blog_container', 'container');
$shop_kit_blog_layout = get_theme_mod('shop_kit_blog_layout', 'rightside');

if (is_active_sidebar('sidebar-1') && $shop_kit_blog_layout != 'fullwidth') {
	$shop_kit_column_set = '9';
} else {
	$shop_kit_column_set = '12';
}

?>
<div class="<?php echo esc_attr($shop_kit_blog_container); ?> mt-3 mb-5 pt-5 pb-3">
	<div class="row">
		<?php if (is_active_sidebar('sidebar-1') && $shop_kit_blog_layout == 'leftside') : ?>
			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
		<div class="col-lg-<?php echo esc_attr($shop_kit_column_set); ?>">
			<main id="primary" class="site-main">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'shop-kit') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'shop-kit') . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>
		<?php if (is_active_sidebar('sidebar-1') && $shop_kit_blog_layout == 'rightside') : ?>
			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
	</div> <!-- end row -->
</div> <!-- end container -->

<?php
get_footer();
