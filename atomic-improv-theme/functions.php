<?php

/**
 * Sets up theme defaults and registers support for more indepth functions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/
 * @link https://developer.wordpress.org/reference/hooks/excerpt_more/
 * 
 * @package wordpress101
 */

?>

<?php

function wordpress101_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('coolimages', 500, 350, true);
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu'
    )
  );
}
;

add_action('after_setup_theme', 'wordpress101_setup');

function wpdocs_excerpt_more($more)
{
  return sprintf(
    '<a href="%1$s" class="more-link">%2$s</a>',
    esc_url(get_permalink(get_the_ID())),
    sprintf(__('Continue reading %s', 'wpdocs'), '<span class="screen-reader-text">' . get_the_title(get_the_ID()) . '</span>')
  );
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

?>