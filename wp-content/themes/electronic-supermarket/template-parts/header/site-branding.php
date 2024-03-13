<?php
/*
* Display Logo and nav
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
       <div class="col-lg-3 col-md-6 align-self-center py-md-2"> 
        <a href="<?= site_url('/');?>">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
          ?>
        </a>
        
      </div> 
      <div class="product-search col-lg-6 col-md-6 align-self-center">
        <?php if(get_theme_mod('electronic_supermarket_search_icon',true) != ''){ ?>
          <div class="search_inner my-3 my-md-0">
            <?php if(class_exists('woocommerce')){ ?>
              <?php get_product_search_form(); ?>
            <?php }?>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-3 col-md-6 align-self-center">
        <div class="header-details">
          <?php if(get_theme_mod('electronic_supermarket_user_icon',true) != ''){ ?>
            <p class="mb-0">
              <?php if(class_exists('woocommerce')){ ?>
                <?php if (is_user_logged_in()) : ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-out-alt"></i><?php esc_html_e( 'User', 'electronic-supermarket' ); ?></a>
                <?php else : ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="far fa-user"></i><?php esc_html_e( 'User', 'electronic-supermarket' ); ?></a>
                <?php endif;?>
              <?php } ?>
            </p>
          <?php }?>
          <?php if(get_theme_mod('electronic_supermarket_notification','') != ''){ ?>
            <p class="mb-0"><i class="fas fa-comment-alt"></i><a href="<?php echo esc_url( get_theme_mod('electronic_supermarket_notification','') ); ?>"><?php esc_html_e( 'Notification', 'electronic-supermarket' ); ?></a></p>
          <?php }?>
          <?php if(get_theme_mod('electronic_supermarket_like_option','') != ''){ ?>
            <p class="mb-0"><i class="fas fa-heart"></i><a href="<?php echo esc_url( get_theme_mod('electronic_supermarket_like_option','') ); ?>"><?php esc_html_e( 'Like', 'electronic-supermarket' ); ?></a></p>
          <?php }?>
          <?php if(get_theme_mod('electronic_supermarket_cart_icon',true) != ''){ ?>
            <p class="mb-0">
              <?php if(class_exists('woocommerce')){ ?>
              <span class="cartbox"><a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket"></i><?php esc_html_e( 'Cart', 'electronic-supermarket' ); ?></a>
                <span class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?></span>
              </span>
              <?php } ?>
            </p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>