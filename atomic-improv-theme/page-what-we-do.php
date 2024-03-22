<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="corporate-events">
    <div class="container">
      <h1>What We Do</h1>
      <?php
        $whatwedo_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "what-we-do"));
      ?>
      <?php if ($whatwedo_query->have_posts()) : ?>
        <?php 
          while ($whatwedo_query->have_posts()) : 
          $whatwedo_query->the_post();
          $whatwedo_url = get_field("image");
        ?>
          <a href="what-we-do"><img src="<?php echo $whatwedo_url ?>"></a>
        <?php endwhile; 
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>Our interactive, custom and hilarious shows are the perfect fit for any audience. </p>
      <p>Fast, funny and tailored to the crowd, Atomic Improv is always a hit.</p>
      <p>You're not just watching the show … you're a part of it!</p>
    </div><!-- .container -->
  </section>
  <section class="power-of-yes" id="power-of-yes">
    <div class="container">
      <h2>Power of Yes</h2>
        $powerofyes_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "power-of-yes"));
      ?>
      <?php if ($powerofyes_query->have_posts()) : ?>
        <?php 
          while ($powerofyes_query->have_posts()) : 
          $powerofyes_query->the_post();
          $powerofyes_url = get_field("image");
        ?>
          <a href="what-we-do"><img src="<?php echo $powerofyes_url ?>"></a>
        <?php endwhile; 
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>At Power of Yes!, we believe in the transformative power of improv. Our workshop is designed to unlock your
        team's full potential. </p>
      <p>Starting with simple exercises, participants will collaborate in teams, building trust and camaraderie as they
        navigate through challenges together.</p>
      <p>But that's just the beginning. As the workshop progresses, we move onto games and activities that will push
        your creativity and communication skills to new heights! From quick thinking to active listening, every moment
        is an opportunity to shine.</p>
      <p>Whether you have a team of 10 or an audience of 1,000, our workshop adapts to fit your needs. Choose from a
        hands-on session for intimate teams or turn it into an interactive and entertaining keynote address for a larger
        crowd.</p>
      <p>Additional Booking Options for Donovan and Chris:</p>
      <ul>
        <li>Professional MC's: Corporate, Conference, and Special Events</li>
        <li>Special Package Pricing when booking Professional MC's PLUS Power of Yes! workshop</li>
      </ul>
      
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();