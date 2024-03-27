<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">

    <div class="full-screen-video-container">
      <video autoplay loop muted>
        <source
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/atomic-ad-2.mp4"
          type="video/mp4">
      </video>
      <!-- <div class="vid">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/Vkwthc6cyBY" title="Atomic Ad"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div> -->

      <div class="full-screen-video-content">
        <h1>Atomic<br><span>Improv</span></h1>
        <p>Canada's premier improv comedy team</p>
        <a href="contact-us">Book Now</a>

  <section class="frontpage-top">
    <h1>Atomic Improv!</h1>
    <!-- background video -->
    <div class="full-screen-video-container">
      <!-- bg-gif -->
      <img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/atomic-bg.gif" class="bg-gif" alt="5 second video of Donovan Workun and Chris Borger">
      <!-- bg content -->
      <div class="content-flex">
        <div class="full-screen-video-content">
          <h2>Atomic <span>Improv</span></h2>
          <p>Canada's premier improv comedy team</p>
          <a href="contact-us">Book Now</a>
        </div>
      </div>
    </div>
  </section><!-- end of bg-video -->









  <!-- What We Do  -->
  <section class="what-we-do">
    <div class="container">
      <!-- W.W.D poster -->
      <div class="poster">
        <?php
        $whatwedo_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "what-we-do"));
        ?>
        <?php if ($whatwedo_query->have_posts()): ?>
          <?php
          while ($whatwedo_query->have_posts()):
            $whatwedo_query->the_post();
            $whatwedo_url = get_field("image");
            ?>
            <a href="what-we-do"><img src="<?php echo $whatwedo_url ?>"></a>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="section-flex">
          <div class="section-title">
            <h2>What We Do</h2>
          </div>
        </div>
      </div>
      <!-- W.W.E content -->
      <div class="section-content">
        <h3>Customized shows for your events</h3>
        <p>Atomic Improv is Canada's Premier two man Improv troupe that has been
      creating comedy on the spot based entirely on audience suggestion since 1990.</p>
      <p>These 3 time World Improv champions and main stage performer at Montreal's just for laughs can help turn your event from humdrum to hilarious!</p>

          
        <a href="what-we-do">Learn More</a>
      </div>

      <!-- Power Of Yes -->
      <section class="power-of-yes">
        <!-- Power of Yes poster-->
        <h3>Corporate Workshops</h3>
        <?php
        $powerofyes_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "power-of-yes"));
        ?>
        <?php if ($powerofyes_query->have_posts()): ?>
          <?php
          while ($powerofyes_query->have_posts()):
            $powerofyes_query->the_post();
            $powerofyes_url = get_field("image");
            ?>
            <a href="what-we-do"><img src="<?php echo $powerofyes_url ?>"></a>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="section-flex">
          <div class="section-content">
            <p>Unlock your teams full potential with the Power of Yes! our customizable corporate
              workshop
              that can help
              teams
              boost their creativity and communication skills.</p>
            <a href="what-we-do#power-of-yes">Learn More</a>
          </div>
        </div>
      </section><!-- end of Power of Yes -->
    </div> <!-- end of container -->
  </section><!-- end of What We Do section -->








  <!-- About -->
  <section class="about-atomic-improv">
    <div class="container">
      <!-- About poster -->
      <div class="poster">
        <?php
        $whoweare_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "who-we-are"));
        ?>
        <?php if ($whoweare_query->have_posts()): ?>
          <?php
          while ($whoweare_query->have_posts()):
            $whoweare_query->the_post();
            $whoweare_url = get_field("image");
            ?>
            <a href="who-we-are"><img src="<?php echo $whoweare_url ?>"></a>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
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
      <p>These 3-time World Improv Champions and main stage performer at Montreal's Just For Laughs can help turn your event from humdrum to hilarious!</p>

        <a href="who-we-are">More About Us</a>
      </div>
    </div>
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
            <!-- start loop -->
            <?php
            $instagram_args = array(
              "post_type" => "post",
              "category_name" => "instagram",
              "posts_per_page" => 1
            );
            $instagram_query = new WP_Query($instagram_args);
            // Tests if there even are any posts
            if ($instagram_query->have_posts()):
              // As long as there are new posts...
              while ($instagram_query->have_posts()):
                // Select the next post
                $instagram_query->the_post();
                ?>
                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?>

              <?php endwhile; ?>
              <!-- end loop -->
              <?php
            endif;
            wp_reset_postdata();
            ?>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Facebook</h3>
            <!-- start loop -->
            <?php
            $facebook_args = array(
              "post_type" => "post",
              "category_name" => "facebook",
              "posts_per_page" => 1
            );
            $facebook_query = new WP_Query($facebook_args);
            // Tests if there even are any posts
            if ($facebook_query->have_posts()):
              // As long as there are new posts...
              while ($facebook_query->have_posts()):
                // Select the next post
                $facebook_query->the_post();
                ?>
                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?>

              <?php endwhile; ?>
              <!-- end loop -->
              <?php
            endif;
            wp_reset_postdata();
            ?>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Youtube</h3>
            <!-- start loop -->
            <?php
            $youtube_args = array(
              "post_type" => "post",
              "category_name" => "youtube",
              "posts_per_page" => 1
            );
            $youtube_query = new WP_Query($youtube_args);
            // Tests if there even are any posts
            if ($youtube_query->have_posts()):
              // As long as there are new posts...
              while ($youtube_query->have_posts()):
                // Select the next post
                $youtube_query->the_post();
                ?>
                <h4>
                  <?php the_title(); ?>
                </h4>
                <?php the_content(); ?>

              <?php endwhile; ?>
              <!-- end loop -->
              <?php
            endif;
            wp_reset_postdata();
            ?>
          </div>

        </section>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();