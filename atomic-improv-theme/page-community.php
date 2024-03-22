<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atomic_Improv
 */

get_header();
?>


<main id="primary" class="site-main">
  <section>
    <div class="container">
      <h2>In the community</h2>

      <div><a href="https://worldjrfootballchampionships.com/"><img src="" alt="football alberta logo"></a> <p></p></div>
      <div><a href="https://greatoutdoorscomedyfestival.com/"><img src="" alt="great outdoor comedy fest"></a> <p></p></div>
      <div><a href="https://icedistrict.com/event/oktoberfest-2023/"><img src="" alt="oktoberfest logo"></a> <p></p></div>
      <div><a href="https://riverhawksbaseball.com/"><img src="" alt="edmonton riverhawks logo"></a> <p></p></div>
    </div>
  </section>
  <section>
    <div class="container">

      <h1>
        <?php echo get_the_title(); ?>
      </h1>

      <p>Social Media page</p>
      <!-- start loop -->
      <?php
      $args = array(
        'post_type' => 'post'
      );
      $the_query = new WP_Query($args);
      // Tests if there even are any posts
      if ($the_query->have_posts()):
        // As long as there are new posts...
        while ($the_query->have_posts()):
          // Select the next post
          $the_query->the_post();
          ?>
          <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <p>Hi I am a post</p>
          <?php the_content(); ?>

        <?php endwhile; else: ?>
        <!-- shows this if there are no posts -->
        <p>
          <?php esc_html_e("Sorry, no posts matched your criteria."); ?>
        </p>
        <!-- end loop -->
      <?php
      endif;
      wp_reset_postdata();
      ?>

    </div><!-- .container -->
  </section>
</main><!-- #main -->

<?php
get_footer();
