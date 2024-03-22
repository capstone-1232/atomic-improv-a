<?php

// This is the template for the About Us page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="who-we-are">
    <div class="container">

      <h1>Who We Are</h1>
      <?php
        $whoweare_query = new WP_Query(array("post_type" => "image", "posts_per_page" => 1, "tag" => "who-we-are"));
      ?>
      <?php if ($whoweare_query->have_posts()) : ?>
        <?php 
          while ($whoweare_query->have_posts()) : 
          $whoweare_query->the_post();
          $whoweare_url = get_field("image");
        ?>
          <a href="who-we-are"><img src="<?php echo $whoweare_url ?>"></a>
        <?php endwhile; 
        wp_reset_postdata(); ?>
      <?php endif; ?>
      <p>Atomic Improv was founded in 1990, and emerged as a cornerstone of Edmonton's improv scene.</p>
      <img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/sidetrack.webp"
        alt="sidetrack cafe">
      <p>They began with a weekly residency at Sidetrack Café where they invented the Alberta Method - a faced paced
        style full of audience participation.</p>
      <img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/oldatomic.webp"
        alt="old atomic improv pic">
      <p>From nightclubs and bars to charming towns across Alberta, enriching the lives of audiences everywhere, Atomic
        Improv brought laughter to numerous venues. Their comedic talent transcended boundaries, propelling them on a
        whirlwind tour across Western Canada.</p>
      <div class="flex">
        <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/justforlaughs.webp"
          alt="just for laughs logo">
        <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/canadiancomedyawards.webp"
          alt="canadian comedy awards logo">
      </div>
      <p>Throughout their career, Atomic Improv achieved numerous milestones. Including being the first improv group to
        headline at Montreal's Just for Laughs festival. They also secured victory in an international improv
        tournament, earning the privilege to headline at the prestigious Théâtre St-Denis.</p>
      <p>In 2012, at the esteemed Canada House in London during the Olympics, Donovan proudly represented Alberta,
        delivering a memorable performance that welcomed audiences to Canada with open arms.</p>
      <p>Atomic Improv not only shared the stage with renowned comedians like Paul Reiser but also graced the Great
        Outdoor Comedy Festival alongside comedy luminaries such as Chelsea Handler and David Spade.</p>
    </div><!-- .container -->
  </section>
  <section class="donovan">
    <div class="container">
      <h2>Donovan Workun</h2>
      <p class="socialhandle">@atomicimprov</p>
      <img
        src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/donovantransparent.webp"
        alt="donovan making a funny face">
      <p>Donovan is a world-renowned Improviser, and founding member of Atomic Improv with over 30 years of comedy under
        his belt. Donovan has toured all over Canada, the US, and Europe, amazing audiences with his brilliant comedic
        timing, wit, and hilarious characters. </p>

      <p>For a remarkable span of fourteen years, from 2003 to 2017, Donovan graced the airwaves with their wit and
        humor on the CBC radio series, "The Irrelevant Show," leaving an indelible mark on listeners across the nation.
      </p>
      <p>For a remarkable span of fourteen years, from 2003 to 2017, Donovan graced the airwaves with their wit and
        humor on the CBC radio series, "The Irrelevant Show," leaving an indelible mark on listeners across the nation.
      </p>
      <div class="flex">
        <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/justforlaughs.webp"
          alt="just for laughs logo">
        <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/irrelevantshow.webp"
          alt="irrelevant show logo">
        <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/canadiancomedyawards.webp"
          alt="canadian comedy awards logo">
      </div>
      <p>Donovan is also the voice of the Edmonton Riverhawks during the summer and spends his winters in Banff as @thatfunnysanta  </p>
      <img src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/santa.webp"
        alt="santa">
        <p>In December 2023, a  heartwarming celebration unfolded when over 500 children and parents  from Ukraine had a special visit from Santa Claus. This was a significant moment for families who experienced the joy of Santa Claus for the first time.</p>
    </div>
  </section>
  <section class="chris">
      <h2>Chris Borger</h2>
      <p class="socialhandle">@thecheeseborger</p>
      <img
        src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/chrisborger.webp"
        alt="chris borger headshot">
        <p>Chris Borger has worked as a professional improviser since 2011, and performs regularly with Atomic Improv, White Rhino, Rapid Fire Theatre, and the 11 o’ Clock Number.</p>
        <p>He has produced online video content for CBC Comedy, and Oilersnation, and educational videos for the University of Alberta.</p>
        <p>Borger also has experience as an educational consultant working with post-secondary instructors from the University of Alberta, NAIT, and Pixel Blue College.</p>
        <p>His sketch comedy troupe Marv n’ Berry has toured North America’s comedy festival circuit, appearing recently at the Dallas Comedy Festival, the San Francisco Sketchfest, and Montreal Sketchfest.</p>
  </section>
</main><!-- #main -->

<?php
get_footer();