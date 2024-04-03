<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atomic_Improv
 */

?>

<footer id="colophon" class="site-footer">
  <div class="container">
    <div class="footerflex">

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-2',
          'menu_id' => 'footer-menu',
        )
      );
      ?>
      <div class="footerlinks">
        <a href="#"><svg fill="#131313" width="3rem" height="3rem" viewBox="0 0 32.00 32.00"
            xmlns="http://www.w3.org/2000/svg" stroke="#131313" stroke-width="0.00032" transform="rotate(0)">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
              stroke-width="0.384"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
              </path>
            </g>
          </svg></a>
        <a href="#"><svg width="3rem" height="3rem" viewBox="0 0 24.00 24.00" fill="none"
            xmlns="http://www.w3.org/2000/svg" stroke="#131313" stroke-width="0.00024000000000000003">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M19.67 8.14002C19.5811 7.7973 19.4028 7.48433 19.1533 7.23309C18.9038 6.98185 18.5921 6.80134 18.25 6.71001C16.176 6.4654 14.0883 6.35517 12 6.38001C9.91174 6.35517 7.82405 6.4654 5.75001 6.71001C5.40793 6.80134 5.09622 6.98185 4.84674 7.23309C4.59725 7.48433 4.41894 7.7973 4.33001 8.14002C4.10282 9.41396 3.99236 10.706 4.00001 12C3.99198 13.3007 4.10244 14.5994 4.33001 15.88C4.42355 16.2172 4.60391 16.5239 4.85309 16.7696C5.10226 17.0153 5.41153 17.1913 5.75001 17.28C7.82405 17.5246 9.91174 17.6349 12 17.61C14.0883 17.6349 16.176 17.5246 18.25 17.28C18.5885 17.1913 18.8978 17.0153 19.1469 16.7696C19.3961 16.5239 19.5765 16.2172 19.67 15.88C19.8976 14.5994 20.008 13.3007 20 12C20.0077 10.706 19.8972 9.41396 19.67 8.14002ZM10.36 14.39V9.63001L14.55 12L10.36 14.38V14.39Z"
                fill="#131313"></path>
            </g>
          </svg></a>
        <a href="#"><svg fill="#131313" width="3rem" height="3rem" viewBox="0 0 32 32"
            xmlns="http://www.w3.org/2000/svg" stroke="#131313" stroke-width="0.00032">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z">
              </path>
              <path
                d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z">
              </path>
            </g>
          </svg></a>
      </div>

    </div><!-- .footerflex -->

    <div class="site-branding">
      <?php
      the_custom_logo();
      ?>
    </div>
  </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>