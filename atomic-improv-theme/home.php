<?php

// The home template file.

// This will display your latest blog posts. If home.php doesn't exist, Wordpress will use index.php instead.

// @package wordpress101

?>

<h2>Home Page!</h2>

<?php

if (have_posts()):
  while (have_posts()):
    the_post();
    // this is where you'll create the markup for the content that is being looped out
    ?>
      <article>
        <?php echo get_the_post_thumbnail( $post->ID, 'plants' ); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </article>
    <?php
  endwhile;
endif;

?>