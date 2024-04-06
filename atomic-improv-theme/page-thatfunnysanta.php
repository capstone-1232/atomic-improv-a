<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="santa">
    <h2>@ThatFunnySanta</h2>
    <?php
    $thatfunnysanta_hero_query = new WP_Query(
      array(
        "post_type" => "image",
        "posts_per_page" => 1,
        "tag" => "thatfunnysanta_hero"
      )
    );
    if ($thatfunnysanta_hero_query->have_posts()):
      while ($thatfunnysanta_hero_query->have_posts()):
        $thatfunnysanta_hero_query->the_post();
        $thatfunnysanta_hero_url = get_field("image");
        ?>
        <img src="<?php echo $thatfunnysanta_hero_url ?>" alt="That Funny Santa himself!">
        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>
  <section>
    <div class="santa">
      <h3>Corporate Events</h3>
      <?php
      $thatfunnysanta_corporate_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "thatfunnysanta_corporate"
        )
      );
      if ($thatfunnysanta_corporate_query->have_posts()):
        while ($thatfunnysanta_corporate_query->have_posts()):
          $thatfunnysanta_corporate_query->the_post();
          $thatfunnysanta_corporate_url = get_field("image");
          ?>
          <img src="<?php echo $thatfunnysanta_corporate_url ?>" alt="Santa sittng in a throne">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>That funny Santa brings his holly jolly magic to corporate events every Christmas. From office parties to
        corporate gatherings, our Santa brings a unique blend of festive spirit and comedic flair to every event. Has
        your staff been naughty or nice? Let @thatsfunnysanta help dish out the coal and the humor at your next event!
      </p>
    </div>
    <div>
      <h3>Adventures in Banff</h3>
      <p>@thatfunnysanta can often be found visiting Banff at the Fairmont Banff Springs Hotel where he brings holiday
        cheers to guest and visitors alike. </p>
      <?php
      $thatfunnysanta_adventures_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "thatfunnysanta_adventures"
        )
      );
      if ($thatfunnysanta_adventures_query->have_posts()):
        while ($thatfunnysanta_adventures_query->have_posts()):
          $thatfunnysanta_adventures_query->the_post();
          $thatfunnysanta_adventures_url = get_field("image");
          ?>
          <img src="<?php echo $thatfunnysanta_adventures_url ?>" alt="Santa in Banff">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <div>
      <h3>In the Community</h3>
      <?php
      $thatfunnysanta_community_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "thatfunnysanta_community"
        )
      );
      if ($thatfunnysanta_community_query->have_posts()):
        while ($thatfunnysanta_community_query->have_posts()):
          $thatfunnysanta_community_query->the_post();
          $thatfunnysanta_community_url = get_field("image");
          ?>
          <img src="<?php echo $thatfunnysanta_community_url ?>" alt="Santa in Banff">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>In December 2023, over 500 children and parents from Ukraine experienced a heartwarming celebration with Santa
        Claus for the first time. Lillia Vovk, a mother who fled the war in Ukraine with her three children, expressed
        how Santa brought warmth and joy to their new home in Canada, creating magical moments for the kids. Janice
        Krissa, co-founder of the FreeStore for Ukrainian Newcomers, praised "ThatFunnySanta" for his ability to turn a
        difficult time into a magical visit, making hundreds feel important and cherished with memories that will endure
        forever.</p>
    </div>
    <div>
      <p>Contact his elf helper Donovan for more information</p>
      <a href="contact-us" class="button-style">Book Us</a>
    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();


/* Validation Check, Please Do Not Remove */
/*-----------------------------------------
HTML validated 04/05/24
CSS validated -
-----------------------------------------*/