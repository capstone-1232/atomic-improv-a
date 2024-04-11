<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>
<main id="primary" class="site-main">
  <section class="top">
    <!-- background video -->
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
        <div class="hero" style="background-image: url('<?php echo $frontpage_hero_url; ?>');">
          <!-- bg-gif -->
          <?php
        // Ending the loop
      endwhile;
      // Resetting post data for the next query.
      wp_reset_postdata();
      // Moving on.
    endif;
    ?>
      <!-- bg content -->
      <div class="hero-content">
        <h1 class="frontpage-h1">Atomic<br><span>Improv</span></h1>
        <p>Canada's premier<br>improv comedy duo!</p>
        <div class="center-container">
          <a href="contact-us" class="button-style">Book Us</a>
        </div>
      </div>
    </div>
  </section><!-- end of bg-video -->


  <!-- What We Do  -->
  <section class="what-we-do">
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
        <a href="what-we-do" class="img-link"><img src="<?php echo $frontpage_whatwedo_url ?>"
            alt="Image of Atomic Improv, Donovan Workun and Chris Borger."></a>
        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
    <div class="center-container">
      <h2 class="frontpage-h2">What We Do</h2>
    </div>
    <div class="container">
      <!-- poster -->
      <div class="content-flex">
        <section class="flex-item">
          <h3>Customized shows</h3>
          <?php
          $events_query = new WP_Query(
            array(
              "post_type" => "image",
              "posts_per_page" => 1,
              "tag" => "events"
            )
          );
          if ($events_query->have_posts()):
            while ($events_query->have_posts()):
              $events_query->the_post();
              $events_url = get_field("image");
              ?>
              <a href="what-we-do"><img src="<?php echo $events_url ?>" style="margin-bottom:1.5rem;"
                  alt="Poster of 'Power of Yes' workshop with Atomic Improv and Graham Neil"></a>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
          <p>Atomic Improv is Canada's Premier two-man Improv duo that has been creating comedy on the spot based
            entirely on audience suggestion since 1990.</p>
          <p>3-time World Improv champions and headliners of Montreal's Just for Laughs can help turn your event from
            humdrum to hilarious!</p>
          <div class="center-container">
            <a href="what-we-do" class="button-style">Learn More</a>
          </div>
        </section>
        <!-- Power Of Yes -->
        <section class="flex-item">
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
              <a href="what-we-do"><img src="<?php echo $powerofyes_url ?>" style="margin-bottom:1.5rem;"
                  alt="Poster of 'Power of Yes' workshop with Atomic Improv and Graham Neil"></a>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
          <p>Unlock your teams full potential with the <span class="pos">Power of Yes!</span> our customizable
            corporate workshop that can help teams
            boost their creativity and communication skills.</p>
          <div class="center-container">
            <a href="what-we-do" class="button-style">Learn More</a>
          </div>
        </section>

      </div>


    </div> <!-- end of container -->
  </section><!-- end of What We Do section -->

  <!-- About -->
  <section class="about-atomic-improv">
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
        <a class="img-link" href="who-we-are"><img src="<?php echo $frontpage_whoweare_url ?>"
            alt="Image of Donovan Workun and Chris Borger."></a>
        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
    <div class="center-container">
      <h2 class="frontpage-h2">Who We Are</h2>
    </div>
    <div class="container">
      <div class="content-flex">
        <div class="flex-item">
          <?php
          $whoweare_section_query = new WP_Query(
            array(
              "post_type" => "image",
              "posts_per_page" => 1,
              "tag" => "whoweare_section"
            )
          );
          if ($whoweare_section_query->have_posts()):
            while ($whoweare_section_query->have_posts()):
              $whoweare_section_query->the_post();
              $whoweare_section_url = get_field("image");
              ?>
              <a href="who-we-are"><img src="<?php echo $whoweare_section_url ?>"
                  alt="Image of Donovan Workun and Chris Borger."></a>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <div class="flex-item">
          <!-- About poster -->
          <p>Atomic Improv is Canada's premier two man improv troupe that has been
            creating comedy on the spot based entirely on audience suggestion since 1990.</p>
          <p>These 3-time World Improv Champions and main stage performer at Montreal's Just For Laughs can help turn
            your event from humdrum to hilarious!</p>
          <div class="center-container">
            <a href="who-we-are" class="button-style">More About Us</a>
          </div>

        </div>
      </div>
    </div><!-- end of container -->
  </section><!-- end of About section -->
  <!-- social media -->
  <section class="socialmedia">
    <div class="container">

      <!-- social media title -->
      <div class="center-container">
        <h2>#atomicimprov</h2>
      </div>
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
            echo do_shortcode("[custom-facebook-feed feed=3]")
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












