<?php

  // Step 1: Register a widget area.
function enigma_register_footer_widget() {
add_action( 'widgets_init', 'enigma_register_footer_widget' );
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'theme-text-domain' ),
        'id'            => 'footer-widget-area',
        'description'   => __( 'Add widgets here to appear in the footer.', 'theme-text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

// Footer widget class.
class Footer_Widget extends WP_Widget {
    public function __construct() {
      parent::__construct(
          'footer_widget',
          __( 'Footer Widget', 'theme-text-domain' ),
          array( 'description' => __( 'Displays content in the footer.', 'theme-text-domain' ) )
      );
    }

    public function widget( $args, $instance ) { ?>
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3 footer-content">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Company name</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px" />
                        <p><?php _e( 'Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'theme-text-domain' ); ?></p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px" />
                        <p><a href="#!" class="text-white">MDBootstrap</a></p>
                        <p><a href="#!" class="text-white">MDWordPress</a></p>
                        <p><a href="#!" class="text-white">BrandFlow</a></p>
                        <p><a href="#!" class="text-white">Bootstrap Angular</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold"> Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px"/>
                        <p><a href="#!" class="text-white">Your Account</a></p>
                        <p><a href="#!" class="text-white">Become an Affiliate</a></p>
                        <p><a href="#!" class="text-white">Shipping Rates</a></p>
                        <p><a href="#!" class="text-white">Help</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
        </section> <?php
    }
}
// Register widget.
function register_footer_widget() {
  register_widget( 'Footer_Widget' );
}
add_action( 'widgets_init', 'register_footer_widget' );


$Footer_Widget = new Footer_Widget();
?>