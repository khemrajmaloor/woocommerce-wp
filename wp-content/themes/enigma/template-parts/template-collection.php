<?php

if( !defined('ABSPATH' ) ){
  exit; // Exit if accesses directly
}

?>
<style>

span.onsale {
background: #e71d55 !important;
}
h2.woocommerce-loop-product__title, span.price {
color: black;
}

a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
background: #e52450e0;
color: #fff;
}
</style>
 <!-- Collection section... -->
<section id="collection" class="collection">
	<div class="container">
		<h2 class="section__title text-center p-2">New Collection</h2>
		<div class="collection__content" id="collection__content">
			<div class="container" style="background-color: rgb(255, 255, 255); padding: 16px;">
				<div class="row">
					<div class="col-md-12">
						<div class="collection__product__content">
							<?php echo do_shortcode('[products limit="4" columns="4" orderby=""]'); ?>
						</div>
						
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>