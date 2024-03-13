<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

// Hero banner
$row_reverse = $bg_img = '';
if ( isset( $args ) ) {
  $row_reverse = isset($args['row_reverse']) ? $args['row_reverse'] : '';
  $bg_img      = isset($args['bg_img']) ? $args['bg_img'] : '';
  if ( empty($bg_img) ) {
    $bg_img = get_template_directory_uri() . '/assets/img/hero/hero-banner-3.jpg';
  }
}

?>

<div class="prbanner">
  <div class="prbanner__container">
    <div class="prbanner__container__content" style="background: url('<?= $bg_img; ?>'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
      <div class="prbanner__container__content__grid container <?=$row_reverse;?>">
        <div class="prbanner__container__content__grid__items">
          <div>
            <h1>Category Name</h1>
            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis odit unde quidem molestiae mollitia, a dignissimos accusamus eum perspiciatis. Odio saepe cupiditate suscipit sequi vitae? Facere, ipsam. Repellendus, animi.</p>
            <span><a class="btn-xd" href="#">Explore More</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>