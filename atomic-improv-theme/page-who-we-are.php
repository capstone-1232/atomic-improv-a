<?php

// This is the template for the About Us page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="who-we-are">
    <!-- section -->
    <?php
    $whoweare_hero_query = new WP_Query(
      array(
        "post_type" => "image",
        "posts_per_page" => 1,
        "tag" => "whoweare_hero"
      )
    );
    if ($whoweare_hero_query->have_posts()):
      while ($whoweare_hero_query->have_posts()):
        $whoweare_hero_query->the_post();
        $whoweare_hero_url = get_field("image");
        ?>
        <div class="hero" style="background-image: url('<?php echo $whoweare_hero_url ?>');">
          <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
      <div class="hero-content">
        <h1>Who We Are</h1>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <!-- history -->
      <h2>About Atomic Improv</h2>
      <p>Atomic Improv stars the incredible talent of comedic legends Donovan Workun and Chris Borger.</p>
      <p>Atomic Improv has performed all over the world, starting as local legends at Edmonton’s Sidetrack Café to headlining at Montreal's “Just for Laughs” festival and San Francisco Comedy Festival, hosting the red carpet at the Junos and preforming at the 2012 London Summer Olympics.</p>
      <!-- icons -->
      <div class="flex">
        <?php
        $justforlaughs_query = new WP_Query(
          array(
            "post_type" => "image",
            "posts_per_page" => 1,
            "tag" => "justforlaughs"
          )
        );
        if ($justforlaughs_query->have_posts()):
          while ($justforlaughs_query->have_posts()):
            $justforlaughs_query->the_post();
            $justforlaughs_url = get_field("image");
            ?>
            <img src="<?php echo $justforlaughs_url ?>">
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>

        <?php
        $canadiancomedyawards_query = new WP_Query(
          array(
            "post_type" => "image",
            "posts_per_page" => 1,
            "tag" => "canadiancomedyawards"
          )
        );
        if ($canadiancomedyawards_query->have_posts()):
          while ($canadiancomedyawards_query->have_posts()):
            $canadiancomedyawards_query->the_post();
            $canadiancomedyawards_url = get_field("image");
            ?>
            <img src="<?php echo $canadiancomedyawards_url ?>">
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>

      </div>

      <p>They also boast several awards, such as Variety Act of the Year, and Comedy Act of the Year for both 1994 and 1995 by the Canadian Organization of Campus Activities, several Alberta Motion Picture Association Awards, and Canadian Comedy Awards.
      </p>



      <!-- current history -->
      <?php
      $currenthistory_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "currenthistory"
        )
      );
      if ($currenthistory_query->have_posts()):
        while ($currenthistory_query->have_posts()):
          $currenthistory_query->the_post();
          $currenthistory_url = get_field("image");
          ?>
          <img src="<?php echo $currenthistory_url ?>" alt="Donovan holding Chris up">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>Atomic Improv also bring their talents over to the corporate sector entertaining and educating as hosts, keynote speakers and with their incredible Power of Yes workshops that help teach employees to reach their full potential.</p>
    </div>

  </section> <!-- eo section -->

  <!-- donovan section -->
  <section class="donovan">
    <!-- container -->
    <div class="container">
      <!-- title -->
      <h2>Donovan Workun</h2>
      <p class="socialhandle">@atomicimprov</p>
      <?php
      $donovanheadshot_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "donovanheadshot"
        )
      );
      if ($donovanheadshot_query->have_posts()):
        while ($donovanheadshot_query->have_posts()):
          $donovanheadshot_query->the_post();
          $donovanheadshot_url = get_field("image");
          ?>
          <img src="<?php echo $donovanheadshot_url ?>">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>Donovan Workun is a world-renowned Improviser and founding member of Atomic Improv. With over 30 years of comedy under his belt, Donovan has toured all over the world amazing audiences with his brilliant comedic timing, wit, and hilarious characters. </p>

      <p>He is the first Improvisor to headline at Montreal's Just For Laughs and has shared the improv stage with Wayne Brady, and Colin Mochrie (Whose Line is it Anyway?) Mike Myers (SNL & Austin Powers) and two of his childhood idols Dave Thomas and Joe Flaherty of S.C.T.V.</p>
      <?php
      $irrelevantshow_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "irrelevantshow"
        )
      );
      if ($irrelevantshow_query->have_posts()):
        while ($irrelevantshow_query->have_posts()):
          $irrelevantshow_query->the_post();
          $irrelevantshow_url = get_field("image");
          ?>
          <img src="<?php echo $irrelevantshow_url ?>">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>For fourteen years, from 2003 to 2017, Donovan graced the airwaves with his wit and humor on the CBC Radio One series, "The Irrelevant Show,” as a performer and writer, leaving an indelible mark on listeners across the nation.
      </p>
      
      <p>
      He has also shared the screen with Tim Curry, Demi Moore, Patrick Swayze, Carmen Electra, Tom Green, Donald and Keifer Sutherland, appeared on Amazing Race Canada, as well as several commercials for the Alberta Motor Association and Volvo Canada.
      </p>
    </div> <!-- end of container -->
  </section><!-- end of donovan section -->

  <section class="chris">
    <div class="container">
      <h2>Chris Borger</h2>
      <p class="socialhandle">@thecheeseborger</p>
      <?php
      $chrisheadshot_query = new WP_Query(
        array(
          "post_type" => "image",
          "posts_per_page" => 1,
          "tag" => "chrisheadshot"
        )
      );
      if ($chrisheadshot_query->have_posts()):
        while ($chrisheadshot_query->have_posts()):
          $chrisheadshot_query->the_post();
          $chrisheadshot_url = get_field("image");
          ?>
          <img src="<?php echo $chrisheadshot_url ?>">
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      <p>Chris Borger has worked as a professional improviser since 2011.</p>
      <p>He has produced online video content for CBC Comedy, and Oilersnation, and educational videos for the
        University
        of Alberta.</p>
      <p>Borger also has experience as an educational consultant working with post-secondary instructors from the
        University of Alberta, NAIT, and Pixel Blue College.</p>
      <p>His sketch comedy troupe Marv n' Berry has toured North America's comedy festival circuit, appearing
        recently
        at
        the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
    </div> <!-- end of container -->
  </section>
  <section>
    <div class="container">
      <h2>See us in action!</h2>
      <div class="vid">
        <iframe src="https://www.youtube.com/embed/Vkwthc6cyBY?si=CcRySMFZteAcGHAF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>


    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
