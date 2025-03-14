<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="top">
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
        <div class="hero" style="background-image: url('<?php echo $thatfunnysanta_hero_url; ?>');">
          <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
      <div class="hero-content">
        <h1>@ThatFunnySanta</h1>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2>Corporate Events</h2>
      <div class="content-flex">
        <div class="flex-item">
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
              <img src="<?php echo $thatfunnysanta_corporate_url ?>" alt="Santa sitting in a throne">
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <div class="flex-item">
          <p>That Funny Santa brings his holly jolly magic to corporate events every Christmas. From office parties to
            corporate gatherings, our Santa brings a unique blend of festive spirit and comedic flair to every event.
            Has
            your staff been naughty or nice? Let @thatfunnysanta help dish out the coal and the humor at your next
            event!
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="content-flex contact-us">
      <section class="flex-item">
        <h2>Adventures in Banff</h2>
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
        <p>That Funny Santa can often be found visiting Banff at the Fairmont Banff Springs Hotel where he brings holiday
          cheers to guest and visitors alike. </p>
      </section>
      <section class="flex-item">
        <h2>In the Community</h2>
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
            <img src="<?php echo $thatfunnysanta_community_url ?>" alt="An up close shot of Santa and Mrs. Claus.">
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
        <p>In December 2023, That Funny Santa celebrated with over 500 children and parents from Ukraine who got to experience Santa for the first time. </p>
        <p>Janice Krissa, co-founder of the FreeStore for Ukrainian Newcomers, praised "ThatFunnySanta" for his ability to turn a difficult time into a magical visit, helping to make memories that will be cherished forever.</p>
    </div>
    </section>

  </div>
  <div class="skinny-container">
    <section>
      <p>Contact his elf helper Donovan for more information</p>
      <div class="center-container">
        <a href="contact-us" class="button-style">Book Santa</a>
      </div>
    </section>
  </div>

</main><!-- #main -->

<?php
get_footer();


