<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="frontpage-top">


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

      </div>

    </div>
  </section>
  <section class="about-atomic-improv">
    <div class="container">
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
      <h2>Who We Are</h2>
      <p>We are Atomic Improv, a cornerstone of Edmonton’s improv scene for over 30 years.</p>
      <a href="who-we-are">More About Us</a>
    </div>
  </section>
  <section class="what-we-do">
    <div class="container">
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
      <h2>What We Do</h2>
      <p>Customized shows for your events</p>
      <p>Atomic Improv is Canada's Premier two man Improv troupe that has been
      creating comedy on the spot based entirely on audience suggestion since 1990.</p>
      <p>These 3 time World Improv champions and main stage performer at Montreal's just for laughs can help turn your event from humdrum to hilarious!</p>


      <a href="what-we-do">Learn More</a>
      <section class="power-of-yes">
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
        <p>Unlock your teams full potential with the Power of Yes! our customizable corporate workshop that can help teams
        boost their creativity and communication skills.</p>
        <a href="what-we-do">Learn More</a>
      </section>

    </div>
  </section>
  <section class="socialmedia">
    <div class="container">
      <h2>#atomicimprov</h2>
      <p>The Latest from...</p>
      <div class="socialflex">
        <section>
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
        </section>
        <section>
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
        </section>
        <section>
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
        </section>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();