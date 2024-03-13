<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

// For hero slider...
?>

<div class="splide" id="main-slider" style="position:relative; top : -86px";>
    <div class="splide__track">
        <ul class="splide__list">
            <li class="hmsplide__slide__img splide__slide" id ="splide__slider" >
                <img src="<?= get_template_directory_uri().'/assets/img/hero/hero-banner-1.jpg'?>" alt="">
            </li>
            <li class="hmsplide__slide__img splide__slide" id ="splide__slider" >
                <img src="<?= get_template_directory_uri().'/assets/img/hero/hero-banner-2.jpg'?>" alt="">
            </li>
            <li class="hmsplide__slide__img splide__slide" id ="splide__slider" >
                <img src="<?= get_template_directory_uri().'/assets/img/hero/hero-banner-3.jpg'?>" alt="">
            </li>
        </ul>
    </div>
</div>


   