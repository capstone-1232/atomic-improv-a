<?php

// This is the template for the About Us page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="who-we-are">
    <div class="container">
      <h2>Who We Are</h2>
      <?php
      $whoweare_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "who-we-are"));
      ?>
      <?php if ($whoweare_query->have_posts()): ?>
        <?php
        while ($whoweare_query->have_posts()):
          $whoweare_query->the_post();
          $whoweare_url = get_field("image");
          ?>
          <img src="<?php echo $whoweare_url ?>">
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>Atomic Improv has performed all across North America & Europe showcasing at Montreal's “Just for Laughs”
        festival winning the first annual International Improv Tournament.</p>
      <div class="flex">
        <?php
        $justforlaughs_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "just-for-laughs"));
        ?>
        <?php if ($justforlaughs_query->have_posts()): ?>
          <?php
          while ($justforlaughs_query->have_posts()):
            $justforlaughs_query->the_post();
            $justforlaughs_url = get_field("image");
            ?>
            <img src="<?php echo $justforlaughs_url ?>">
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
        $canadiancomedyawards_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "canadian-comedy-awards"));
        ?>
        <?php if ($canadiancomedyawards_query->have_posts()): ?>
          <?php
          while ($canadiancomedyawards_query->have_posts()):
            $canadiancomedyawards_query->the_post();
            $canadiancomedyawards_url = get_field("image");
            ?>
            <img src="<?php echo $canadiancomedyawards_url ?>">
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <p>Atomic Improv performed at numerous Universities and Colleges across
        Canada, and were Voted Variety act of the year, and Comedy act of the year for both 1994,
        and 1995. by the Canadian Organization of Campus Activities. They were also the first non-
        musical act to be nominated for Entertainer of the year.
      </p>
      <img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/d-c-blue-sm.webp" alt="Donovan holding Chris up">
      <p>Since 1996 The Atomic Improv Co. has been focusing their talents on the corporate sector performing their groundbreaking show for hundreds of corporate dinners, lunches, Christmas parties and product launches. Their unique form of comedy allows them to tailor the show to any company’s needs, making them a perfect addition to any organizations function.</p>
      
    </div><!-- .container -->
  </section>
  <section class="donovan">
    <div class="container">
      <h3>Donovan Workun</h3>
      <p class="socialhandle">@atomicimprov</p>
      <?php
      $donovanheadshot_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "donovan-headshot"));
      ?>
      <?php if ($donovanheadshot_query->have_posts()): ?>
        <?php
        while ($donovanheadshot_query->have_posts()):
          $donovanheadshot_query->the_post();
          $donovanheadshot_url = get_field("image");
          ?>
          <img src="<?php echo $donovanheadshot_url ?>">
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>Donovan is a world-renowned Improviser, and founding member of Atomic Improv with over 30 years of comedy under
        his belt. Donovan has toured all over Canada, the US, and Europe, amazing audiences with his brilliant comedic
        timing, wit, and hilarious characters. </p>

      <p>He is the first Improvisor to headline at Montreal’s JUST FOR LAUGHS and has shared the improv stage with Wayne
        Brady, and Colin Mochrie (Whose Line is it Anyway?) Mike Myers (SNL & Austin Powers) and two of his childhood
        idols Dave Thomas and Joe Flarhety of S.C.T.V.</p>

      <div class="flex">
        <?php
        $justforlaughs_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "just-for-laughs"));
        ?>
        <?php if ($justforlaughs_query->have_posts()): ?>
          <?php
          while ($justforlaughs_query->have_posts()):
            $justforlaughs_query->the_post();
            $justforlaughs_url = get_field("image");
            ?>
            <img src="<?php echo $justforlaughs_url ?>">
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
        $irrelevantshow_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "the-irrelevant-show"));
        ?>
        <?php if ($irrelevantshow_query->have_posts()): ?>
          <?php
          while ($irrelevantshow_query->have_posts()):
            $irrelevantshow_query->the_post();
            $irrelevantshow_url = get_field("image");
            ?>
            <img src="<?php echo $irrelevantshow_url ?>">
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
        $canadiancomedyawards_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "canadian-comedy-awards"));
        ?>
        <?php if ($canadiancomedyawards_query->have_posts()): ?>
          <?php
          while ($canadiancomedyawards_query->have_posts()):
            $canadiancomedyawards_query->the_post();
            $canadiancomedyawards_url = get_field("image");
            ?>
            <img src="<?php echo $canadiancomedyawards_url ?>">
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <p>For a remarkable span of fourteen years, from 2003 to 2017, Donovan graced the airwaves with his wit and humor
        on the CBC radio series, "The Irrelevant Show," leaving an indelible mark on listeners across the nation.</p>
    </div>
  </section>
  <section class="chris">
    <div class="container">
      <h3>Chris Borger</h3>
      <p class="socialhandle">@thecheeseborger</p>
      <?php
      $chrisheadshot_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "chris-headshot"));
      ?>
      <?php if ($chrisheadshot_query->have_posts()): ?>
        <?php
        while ($chrisheadshot_query->have_posts()):
          $chrisheadshot_query->the_post();
          $chrisheadshot_url = get_field("image");
          ?>
          <img src="<?php echo $chrisheadshot_url ?>">
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>Chris Borger has worked as a professional improviser since 2011, and performs regularly with Atomic Improv,
        White
        Rhino, Rapid Fire Theatre, and the 11 o’ Clock Number.</p>
      <p>He has produced online video content for CBC Comedy, and Oilersnation, and educational videos for the
        University
        of Alberta.</p>
      <p>Borger also has experience as an educational consultant working with post-secondary instructors from the
        University of Alberta, NAIT, and Pixel Blue College.</p>
      <p>His sketch comedy troupe Marv n’ Berry has toured North America’s comedy festival circuit, appearing recently
        at
        the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
    </div>
  </section>
  <section>
    <div class="container">
      <h2>See us in action</h2>
      <!-- Insert youtube here -->
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();