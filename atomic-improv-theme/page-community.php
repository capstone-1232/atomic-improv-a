<?php
// this is the social media page
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

      <div class="card"><a href="https://worldjrfootballchampionships.com/"><img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/football-alberta-logo.webp" alt="football alberta logo"></a>
        <p>You can catch Donovan as he helps entertain and host fans and players for another great international event in our city. If baseball isn’t enough Donovan will also be working hard on stage at the fan tailgate party for the U20 international football championships.</p>
      </div>
      <div class="card"><a href="https://greatoutdoorscomedyfestival.com/"><img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/gocf-logo.webp" alt="great outdoor comedy fest"></a>
        <p>Donovan is hitting the road as the head park ranger hosting the wild successful outdoor comedyfest all across Canada this summer.

        </p>
      </div>
      <div class="card"><a href="https://icedistrict.com/event/oktoberfest-2023/"><img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/oktoberfest-logo.webp" alt="oktoberfest logo"></a>
        <p>PROST!!!
          Join Donovan as he hosts Canada’s second largest Octoberfest at Fan Park for the Edmonton oilers entertainment group, tons of great bands and giveaways.  Don’t forget your Lederhosen!</p>
      </div>
      <div class="card"><a href="https://riverhawksbaseball.com/"><img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/riverhawks-logo.webp" alt="edmonton riverhawks logo"></a>
        <p>As summer hits you can see Donovan at another Home Run event as the infield host for the WCL Edmonton Riverhawks Baseball team right in the heart of the river valley at Re/Max field. Help Donovan Cheer, doing and win both on and off the field.  Tons of great giveaways so bring your team spirit June-August.</p>
      </div>
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
        "post_type" => "post",
        "category_name" => "facebook, instagram, youtube",
        "posts_per_page" => 10
      );
      $the_query = new WP_Query($args);
      // Tests if there even are any posts
      if ($the_query->have_posts()) :
        // As long as there are new posts...
        while ($the_query->have_posts()) :
          // Select the next post
          $the_query->the_post();
          ?>
          <div class="post">
            <h2>
              <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>

          </div>
        <?php endwhile; ?>
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
