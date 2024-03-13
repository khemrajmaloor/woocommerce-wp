<?php

use RankMath\Paper\Blog;

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * 
 * Header file
 * It is an important theme file.
 * Do not delete or modify it without concerning any expert.
 * 
 */

?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ) ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= (is_front_page()) ? get_bloginfo('name') .' - ' . get_bloginfo('description') : get_the_title() . ' | ' . get_bloginfo('name') ; ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <header id="header">
    <div class="header">
      <div class="header__container">
        <div class="header__container__content container">
          <div class="header__row">
            <div class="header__row__item magnify"></div>
            <div class="header__row__item site-title">
              <img src="<?= get_template_directory_uri() . '/assets/img/svg/leaf.svg'; ?>" alt="">
              <?php echo '<span><a href="' . site_url() . '">' . get_bloginfo('name') . '</a></span>'; ?>
            </div>
            <div class="header__row__item search">
              <img class="burger" src="<?= get_template_directory_uri() . '/assets/img/svg/burger.svg'; ?>" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
      <div class="header__menu">
        <nav class="container">
          <ul>
            <li><a href="#">New Arrivals</a></li>
            <li><a class="active" href="#">Topwear</a></li>
            <li><a href="#">Bottomwear</a></li>
            <li><a href="#">Loungewear</a></li>
            <li><a href="#">Store Locator</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div id="main">
    <div class="main">
      <div class="main__container">