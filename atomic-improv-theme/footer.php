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


    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-2',
        'menu_id' => 'footer-menu',
      )
    );
    ?>
    <div class="site-branding">
      <?php
      the_custom_logo();
      ?>
    </div><!-- .site-branding -->
  </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>