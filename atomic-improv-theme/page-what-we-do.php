<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>



<main id="primary" class="site-main">
  <section class="corporate-events">
    <div class="container">
      <div class="flex-title">
        <h1>What We Do</h1>
        <?php
        $whatwedo_hero_query = new WP_Query(
          array(
            "post_type" => "image",
            "posts_per_page" => 1,
            "tag" => "whatwedo_hero"
          )
        );
        if ($whatwedo_hero_query->have_posts()) :
          while ($whatwedo_hero_query->have_posts()) :
            $whatwedo_hero_query->the_post();
            $whatwedo_hero_url = get_field("image");
        ?>
            <div class="">
              <img src="<?php echo $whatwedo_hero_url ?>" alt="Donovan holding Chris up">
            </div>

        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <!-- info -->
      <div class="events-info">
        <p>Our interactive, custom and hilarious shows are the perfect fit for any audience. </p>
        <p>Fast, funny and tailored to the crowd, Atomic Improv is always a hit.</p>
        <p>You're not just watching the show … you're a part of it!</p>
        <div class="button contact">
          <a href="contact-us" class="button-style">Book Us Now</a>
        </div>
      </div>
    </div><!-- end of events -->
    </div><!-- container -->
  </section>
  <section class="power-of-yes" id="power-of-yes">
    <div class="container">
      <h2>Power of Yes</h2>
      <div class="poy-flex">

        <div>
          <?php
          $workshop_query = new WP_Query(
            array(
              "post_type" => "image",
              "posts_per_page" => 1,
              "tag" => "workshop"
            )
          );
          if ($workshop_query->have_posts()) :
            while ($workshop_query->have_posts()) :
              $workshop_query->the_post();
              $workshop_url = get_field("image");
          ?>
              <img src="<?php echo $workshop_url ?>" alt="Donovan and Grant Power of Yes.">
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <div class="poy-flex"> 
          <!-- info -->
          <div class="poy-info">
            <p>At <span class="pos">Power of Yes!</span>, we believe in the transformative power of improv. Our workshop
              is
              designed to unlock your
              team's full potential. </p>
            <p>Starting with simple exercises, participants will collaborate in teams, building trust and camaraderie as
              they
              navigate through challenges together.</p>
            <p>But that's just the beginning. As the workshop progresses, we move onto games and activities that will push
              your creativity and communication skills to new heights! From quick thinking to active listening, every
              moment
              is an opportunity to shine.</p>
            <p>Whether you have a team of 10 or an audience of 1,000, our workshop adapts to fit your needs. Choose from a
              hands-on session for intimate teams or turn it into an interactive and entertaining keynote address for a
              larger
              crowd.</p>

          </div> <!-- end of info -->
          <div class="vid">
            <iframe src="https://www.youtube.com/embed/WLpsNkCDZMA" title="Power of Yes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div><!-- end of vid -->
        </div>

        <div class="button">
          <a href="contact-us" class="button-style">Book Power Of Yes</a>
        </div>
      </div>
    </div>
    <div class="container">
      <p>Additional Booking Options for Donovan and Chris:</p>
      <ul class="booking-options">
        <li>Professional MC's: Corporate, Conference, and Special Events</li>
        <li>Special Package Pricing when booking Professional MC's PLUS Power of Yes! workshop</li>
      </ul>
    </div>
   
  </section>
</main><!-- #main -->

<?php
get_footer();
