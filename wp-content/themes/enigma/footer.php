<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

$post_ID     = get_the_ID();
$text_dark   = get_field('text-dark',$post_ID);
$social_icon = !empty(get_field('social_icon',$post_ID)) ?  get_field('social_icon',$post_ID) : '' ;
 
// Footer start here..
?>

<footer class="text-center text-lg-start text-white" style="background-color: #071c22" >
   <div class="container">
      <section class="d-flex justify-content-between p-4" style="background-color: #e52450e0" > 
         <div class="me-5">
            <span class="text-white " style='color:#fff;'><?= !empty($text_dark) ? $text_dark : 'Get connected' ; ?></span>
         </div> <?php
         
         if(isset($social_icon) && !empty($social_icon)){ ?>
            <div class = "social_icon"> <?php
               foreach( $social_icon as $icon_names){
                  foreach($icon_names as $icon){ ?>
                     <a href="<?= !empty($icon['url']) ? $icon['url'] :''; ?>" class="text-white me-4">
                        <i class="fab fa-<?=!empty( $icon['title']) ? $icon['title'] : ''; ?>"></i>
                     </a> <?php
                  }
               } ?>
            </div> <?php
         } ?>
      </section> 
      <?php
         /**
          *  footer widget content call form libs / widgets / footer widget.
          */ 
         $footer_widget = new  Footer_Widget();
         $footer_widget->widget('before_widget' , 'after_widget');
      ?>
      <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2); padding: 23px;" > © 2024 Copyright:
         <a class="text-white" href="https://mdbootstrap.com/">MDEnigmaecommerce.com</a>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>