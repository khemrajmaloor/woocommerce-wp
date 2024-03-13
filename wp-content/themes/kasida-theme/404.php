<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * 404 file.
 * It is an important theme file.
 * It appears when page or blog doesn't exists.
 * Do not delete or modify it without concerning any expert.
 * 
 */

get_header();

?>

<div id="inner-content">
  <div class="ntfound">
    <div class="text">
      <p>404</p>
    </div>
    <div class="containerr">
      <!-- caveman left -->
      <div class="caveman">
        <div class="leg">
          <div class="foot">
            <div class="fingers"></div>
          </div>
        </div>
        <div class="leg">
          <div class="foot">
            <div class="fingers"></div>
          </div>
        </div>
        <div class="shape">
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
        <div class="head">
          <div class="eye">
            <div class="nose"></div>
          </div>
          <div class="mouth"></div>
        </div>
        <div class="arm-right">
          <div class="club"></div>
        </div>
      </div>
      <!-- caveman right -->
      <div class="caveman">
        <div class="leg">
          <div class="foot">
            <div class="fingers"></div>
          </div>
        </div>
        <div class="leg">
          <div class="foot">
            <div class="fingers"></div>
          </div>
        </div>
        <div class="shape">
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
        <div class="head">
          <div class="eye">
            <div class="nose"></div>
          </div>
          <div class="mouth"></div>
        </div>
        <div class="arm-right">
          <div class="club"></div>
        </div>
      </div>
    </div>
    <div class="home">
      <p>Umm! Lost somewhere...</p>
      <a href="<?= site_url() ?>">Return Home</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>

