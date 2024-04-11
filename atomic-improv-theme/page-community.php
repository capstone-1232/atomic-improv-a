<?php
// this is the social media page
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atomic_Improv
 */

get_header();
?>


<main id="primary" class="site-main">
  <section>
    <div class="container">
      <h1 class="margin-top-h1">In the community</h1>
      <div class="content-flex">
        <?php
        $community_card_query = new WP_Query(
          array(
            "post_type" => "community-card",
            "posts_per_page" => 4
          )
        );
        if ($community_card_query->have_posts()):
          while ($community_card_query->have_posts()):
            $community_card_query->the_post();
            $link = get_field("link");
            ?>
            <div class="flex-item">
              <a href="<?php echo $link; ?>">
                <?php the_post_thumbnail(); ?>
              </a>
              <?php echo the_content(); ?>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div><!-- end of card container -->
    </div><!-- end of container -->
  </section><!-- end of community info section -->


  <!-- social media -->
  <section class="community-socials">
    <div class="container">
      <h2>#atomicimprov</h2>
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
            echo do_shortcode("[custom-facebook-feed feed=1]")
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







