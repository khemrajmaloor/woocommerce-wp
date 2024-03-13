    <?php
    if (!defined('ABSPATH')) {
        exit; // Terminate script execution
    }
    global $woocommerce;
    $cart_count = $woocommerce->cart->get_cart_contents_count(); 
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>
            <?php
            if (is_404()) {
                echo 'Page Not Found - ' . get_bloginfo('name');
            } elseif (is_front_page()) {
                echo get_bloginfo('name');
            } else {
                echo get_the_title() . ' - ' . get_bloginfo('name');
            }
            ?>
        </title>
        <?php wp_head(); ?>
        <style>
            input#s {
                border-radius: 15px;
            }
            .nav__content__logo img{
                width:120px;
            }
            span.nav__content__magnify img {
                width: 19px;
                margin-left:12px ;
            }
            .sticky-header {
                position: fixed;
                width: 100%;
                top: 0;
                background-color: #e5286512; /* Initially transparent */
                transition: background-color 0.3s ease; /* Smooth transition effect */
                z-index: 1000; /* Ensure it's above other content */
            }

            .sticky-header.sticky {
                background-color: #ffffff; /* Change to white when sticky */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add shadow */
            }
            .total_product_count {
                position: absolute;
                background: #e52450e0;
                color: #fff;
                padding: 0px 5px 0px 5px;
                border-radius: 50%;
                /* height: 28px; */
                font-size: 12px;
                top: 19px;
                right: 172px;
            }
        </style>
    </head>

    <body <?php body_class(); ?>>

        <nav class="nav sticky-top pb-3 pt-3 sticky-header " style="position:relative;">
            <div class="nav__container container">
                <div class=" nav__row row align-items-center">
                    <div class="nav__content col-md-4">
                        <!-- Logo -->
                        <a class="nav__content__logo" href="<?= site_url('/');?>" style="text-decoration:none;"> <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo_img">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }  ?>
                        </a>
                    </div>
                    <div class=" nav__content  col-md-6">
                        <!-- Navigation Menu -->
                        <nav class=" navbar-expand-sm justify-content-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar"> <?php
                                wp_nav_menu(array(
                                    'container'  => 'ul',
                                    'menu_class' => 'navbar-nav',
                                )); ?>
                            </div>
                        </nav>
                    </div>
                    <div class=" nav__content col-md-2">
                        <!-- Search Input -->
                        <span class="nav__content__magnify">
                            <img src="<?= get_template_directory_uri().'/assets/img/hero/svg/magnify.svg'?>" alt="">
                            <img src="<?= get_template_directory_uri().'/assets/img/hero/svg/profile.svg'?>" alt="">
                            <img src="<?= get_template_directory_uri().'/assets/img/hero/svg/cart.svg'?>"   alt="" style="position:relative">
                            <span class="total_product_count"  style="position:absolute"><?= !empty($cart_count) ? $cart_count:''; ?></span>
                        </span>
                        <?php //get_search_form();?>				
                    </div>
                </div>
            </div>
        </nav>
        <!-- header close -->

  