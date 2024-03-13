<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Footer
 * It is an important theme file.
 * Do not delete or modify it without concerning any expert.
 * 
 */

?>


</div>
</div>

</div>
<footer id="footer">
  <div id="top-copyright" class="copyright">
    <div class="copyright__container">
      <div class="copyright__container__content">
        <div class="copyright__grid container">
          <div class="copyright__grid__items site">
            <p><a href="<?= site_url(); ?>"><?= bloginfo('name'); ?></a> - The Fashion Hub</p>
          </div>
          <div class="copyright__grid__items rights">
            <p>All Rights Reserved &copy; <?= date('Y') . "-" . date('Y') + 1 ?></p>
          </div>
          <div class="copyright__grid__items author">
            <p>Creation of: <a href="https://in.linkedin.com/in/gurpreet-gumber" target="_blank">Gurpreet Gumber</a></p>
            <span>
              <img id="show-footer" src="<?= get_template_directory_uri() . '/assets/img/svg/down-arrow.svg' ?>" alt="" srcset="">
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="main-footer" class="footer">
    <div class="footer__container">
      <div class="footer__container__content">
        <div class="footer__grid">
          <div class="footer__grid__items menus">
            <div class="menus__grid">
              <div class="menus__grid__items">
                <p>Shipping Info</p>
                <ul>
                  <li><a href="#">Payments</a></li>
                  <li><a href="#">Shipping & Exchange</a></li>
                  <li><a href="#">Bulk Queries</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Fabric/Print Disclaimer</a></li>
                </ul>
              </div>
              <div class="menus__grid__items">
                <p>The Company</p>
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Our Company</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Store locator</a></li>
                  <li><a href="#">Franchise Enquiry</a></li>
                </ul>
              </div>
              <div class="menus__grid__items">
                <p>My Account</p>
                <ul>
                  <li><a href="#">Track Order</a></li>
                  <li><a href="#">Exchange Request</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer__grid__items forms">
            <div class="forms__grid">
              <p>Exclusive Benefits</p>
              <form action="" method="post">
                <input type="email" name="email" id="email" placeholder="Enter email here">
                <button type="submit"> <img src="<?= get_template_directory_uri() . '/assets/img/svg/right-arrow.svg'; ?>" alt="submit"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="bottom-copyright" class="copyright">
    <div class="copyright__container">
      <div class="copyright__container__content">
        <div class="copyright__grid container">
          <div class="copyright__grid__items site">
            <p><a href="<?= site_url(); ?>"><?= bloginfo('name'); ?></a> - The Fashion Hub</p>
          </div>
          <div class="copyright__grid__items rights">
            <p>All Rights Reserved &copy; <?= date('Y') . "-" . date('Y') + 1 ?></p>
          </div>
          <div class="copyright__grid__items author">
            <p>Creation of: <a href="https://in.linkedin.com/in/gurpreet-gumber" target="_blank">Gurpreet Gumber</a></p>
            <span>
              <img id="hide-footer" src="<?= get_template_directory_uri() . '/assets/img/svg/down-arrow.svg' ?>" alt="" srcset="">
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>