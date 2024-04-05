<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>
<main id="primary" class="site-main">
  <section class="frontpage-top">
    <!-- background video -->
    <div class="full-screen-video-container">
      <!-- bg-gif -->
      <?php
      // Querying the hero image gif using a post.
      // This makes it easy to switch out in the future.
      $frontpage_hero_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "frontpage_hero"
        )
      );
      // Testing if the given query has posts via alternate syntax.
      if ($frontpage_hero_query->have_posts()):
        // Looping through the posts using alternate syntax.
        while ($frontpage_hero_query->have_posts()):
          $frontpage_hero_query->the_post();
          // Getting image URL.
          $frontpage_hero_url = get_field("image");
          ?>
          <!-- Displaying queried image in img tag. -->
          <img src="<?php echo $frontpage_hero_url ?>" class="bg-gif" alt="5 second video of Donovan Workun and Chris Borger">

          <?php
          // Ending the loop
        endwhile;
        // Resetting post data for the next query.
        wp_reset_postdata();
        // Moving on.
      endif;
      ?>

      <!-- bg content -->
      <div class="content-flex">
        <div class="full-screen-video-content">
          <!-- this h1 needs to be different than the other h1's -->
          <h1>Atomic <span>Improv</span></h1>
          <p>Canada's premier improv comedy team</p>
          <a href="contact-us">Book Now</a>
        </div>
      </div>
    </div>
  </section><!-- end of bg-video -->


  <!-- What We Do  -->
  <section class="what-we-do">
    <div class="container">
      <!-- what we do flex container -->
      <div class="wwd-flex">
        <div class="events">
          <!-- poster -->
          <div class="poster">
            <?php
            $frontpage_whatwedo_query = new WP_Query(
              array(
                "post_type" => "image",
                "posts_per_page" => 1,
                "tag" => "frontpage_whatwedo"
              )
            );
            if ($frontpage_whatwedo_query->have_posts()):
              while ($frontpage_whatwedo_query->have_posts()):
                $frontpage_whatwedo_query->the_post();
                $frontpage_whatwedo_url = get_field("image");
                ?>
                <a href="what-we-do"><img src="<?php echo $frontpage_whatwedo_url ?>"></a>
                <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
            <div class="section-flex">
              <div class="section-title">
                <h2>What We Do</h2>
              </div>
            </div>
          </div>
          <div class="section-content">
            <h3>Customized shows for your events</h3>
            <p>Atomic Improv is Canada's Premier two man Improv troupe that has been
              creating comedy on the spot based entirely on audience suggestion since 1990.</p>
            <p>These 3 time World Improv champions and main stage performer at Montreal's just for laughs can help turn
              your event from humdrum to hilarious!</p>
            <a href="what-we-do" class="button-style">Learn More</a>
          </div>
        </div><!-- end of events section -->
        <!-- Power Of Yes -->
        <div class="power-of-yes">
          <!-- Power of Yes poster-->
          <h3>Corporate Workshops</h3>
          <?php
          $powerofyes_query = new WP_Query(
            array(
              "post_type" => "image",
              "posts_per_page" => 1,
              "tag" => "powerofyes"
            )
          );
          if ($powerofyes_query->have_posts()):
            while ($powerofyes_query->have_posts()):
              $powerofyes_query->the_post();
              $powerofyes_url = get_field("image");
              ?>
              <a href="what-we-do"><img src="<?php echo $powerofyes_url ?>"></a>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
          <div class="section-flex">
            <div class="section-content">
              <p>Unlock your teams full potential with the <span class="pos">Power of Yes!</span> our customizable
                corporate
                workshop
                that can help
                teams
                boost their creativity and communication skills.</p>
              <a href="what-we-do#power-of-yes" class="button-style">Learn More</a>
            </div>
          </div>
        </div><!-- end of Power of Yes -->
      </div><!-- end of flex container -->
    </div> <!-- end of container -->
  </section><!-- end of What We Do section -->
  <!-- About -->
  <section class="about-atomic-improv">
    <div class="container">
      <!-- About poster -->
      <div class="about">
        <div class="poster">
          <?php
          $frontpage_whoweare_query = new WP_Query(
            array(
              "post_type" => "image",
              "posts_per_page" => 1,
              "tag" => "frontpage_whoweare"
            )
          );
          if ($frontpage_whoweare_query->have_posts()):
            while ($frontpage_whoweare_query->have_posts()):
              $frontpage_whoweare_query->the_post();
              $frontpage_whoweare_url = get_field("image");
              ?>
              <a href="who-we-are"><img src="<?php echo $frontpage_whoweare_url ?>"></a>
            <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
          <!-- About content -->
          <div class="section-flex">
            <div class="section-title">
              <h2>Who We Are</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <p>Atomic Improv is Canada's premier two man improv troupe that has been
            creating comedy on the spot based entirely on audience suggestion since 1990.</p>
          <p>These 3-time World Improv Champions and main stage performer at Montreal's Just For Laughs can help turn
            your event from humdrum to hilarious!</p>
          <a href="who-we-are" class="button-style">More About Us</a>
        </div>
      </div><!-- end of about section -->

    </div><!-- end of container -->
  </section><!-- end of About section -->


  <!-- social media -->
  <section class="socialmedia">
    <div class="container">

      <!-- social media title -->
      <div class="social-media-title-container">
        <div class="social-media-title">
          <h2>#atomicimprov</h2>
        </div>
      </div>

      <h4>The Latest from...</h4>
      <div class="socialflex">
        <section>
          <div class="social-content">
            <h3>Instagram</h3>
            <?php
            echo do_shortcode("[instagram-feed feed=1]")
              ?>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Facebook</h3>
            <?php
            echo do_shortcode("[custom-facebook-feed feed=1]")
              ?>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Youtube</h3>
            <?php
            echo do_shortcode("[youtube-feed feed=3]")
              ?>
          </div>

        </section>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();