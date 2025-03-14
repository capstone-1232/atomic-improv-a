<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
    <section class="top">
        <?php
        $hecklehole_hero_query = new WP_Query(
            array(
                "post_type" => "image",
                "posts_per_page" => 1,
                "tag" => "hecklehole_hero"
            )
        );
        if ($hecklehole_hero_query->have_posts()):
            while ($hecklehole_hero_query->have_posts()):
                $hecklehole_hero_query->the_post();
                $hecklehole_hero_url = get_field("image");
        ?>
                <div class="hero" style="background-image: url('<?php echo $hecklehole_hero_url; ?>');">
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
            ?>
            <div class="hero-content">
                <h1></h1>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="content-flex">
                <div class="flex-item">
                    <h2>Heckle what?</h2>
                    <p>Planning a golf tournament this summer?</p>
                    <p>Bring the laughs to the links with the comedic genius of Donovan Workun and Chris Borger from
                        Atomic Improv!</p>
                </div>

                <div class="flex-item">
                    
                        <div class="heckle-vid">

                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@thecheeseborger/video/7456946545020112133" data-video-id="7456946545020112133" style="max-width: 605px;min-width: 325px;">
                                <section> <a target="_blank" title="@thecheeseborger" href="https://www.tiktok.com/@thecheeseborger?refer=embed">@thecheeseborger</a> I like my golfers like I like my coffee: ROASTED. And creamy. And served with a small pastry. @Donovan Workun @Road 55 <a title="golf" target="_blank" href="https://www.tiktok.com/tag/golf?refer=embed">#golf</a> <a title="heckle" target="_blank" href="https://www.tiktok.com/tag/heckle?refer=embed">#heckle</a> <a title="heckler" target="_blank" href="https://www.tiktok.com/tag/heckler?refer=embed">#heckler</a> <a title="roast" target="_blank" href="https://www.tiktok.com/tag/roast?refer=embed">#roast</a> <a title="backoff" target="_blank" href="https://www.tiktok.com/tag/backoff?refer=embed">#backoff</a> <a title="faceoffchallnge" target="_blank" href="https://www.tiktok.com/tag/faceoffchallnge?refer=embed">#faceoffchallnge</a> <a title="challenge" target="_blank" href="https://www.tiktok.com/tag/challenge?refer=embed">#challenge</a> <a title="comedy" target="_blank" href="https://www.tiktok.com/tag/comedy?refer=embed">#comedy</a> <a target="_blank" title="♬ original sound - thecheeseborger" href="https://www.tiktok.com/music/original-sound-7456946592528190213?refer=embed">♬ original sound - thecheeseborger</a> </section>
                            </blockquote>
                            <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                  
                </div>
                <div class="flex-item">
                    <div class="icon-flex">
                        <?php
                        $hecklerooster_query = new WP_Query(
                            array(
                                "post_type" => "image",
                                "posts_per_page" => 1,
                                "tag" => "heckle_rooster"
                            )
                        );
                        if ($hecklerooster_query->have_posts()):
                            while ($hecklerooster_query->have_posts()):
                                $hecklerooster_query->the_post();
                                $hecklerooster_url = get_field("image");
                        ?>
                                <img src="<?php echo $hecklerooster_url ?>" alt="Heckle Hole rooster on a golf tee.">
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>

                </div>
                <div class="flex-item">
                    <p>At the Heckle Hole, this dynamic duo will deliver side-splitting roasts, witty banter, and
                        customized jokes that will have your players cracking up as they tee off.</p>
                </div>

                <div class="flex-item">
                    <p>Donovan and Chris are masters of improv and will turn your tournament into a comedy event like
                        no other. Check out past Heckle Holes on <a href="https://www.tiktok.com/@thecheeseborger/video/7456946545020112133"><span class="pos">TikTok</span></a> or <a href="https://www.instagram.com/p/DEgI4owSqhQ/"><span class="pos">Instagram</span></a> (over 10 million views across
                        platforms!).</p>
                    <p>Video package add-ons available! Add a dose of hilarity to your day on the green!</p>
                    <div class="center-container">
                        <a href="contact-us" class="button-style">Book Heckle Hole</a>
                    </div>
                </div>
                <div class="flex-item">
                    <div class="heckle-img">
                        <!-- Poster -->
                        <?php
                        $hecklehole_query = new WP_Query(
                            array(
                                "post_type" => "image",
                                "posts_per_page" => 1,
                                "tag" => "hecklehole_poster"
                            )
                        );
                        if ($hecklehole_query->have_posts()):
                            while ($hecklehole_query->have_posts()):
                                $hecklehole_query->the_post();
                                $hecklehole_url = get_field("image");
                        ?>
                                <div class="flex-item ">
                                    <img src="<?php echo $hecklehole_url ?>" alt="Promotional poster for Heckle hole.">




                                </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                        <!-- Heckle hole skull logo -->
                        <?php
                        $heckleskull_query = new WP_Query(
                            array(
                                "post_type" => "image",
                                "posts_per_page" => 1,
                                "tag" => "heckle_skull"
                            )
                        );
                        if ($heckleskull_query->have_posts()):
                            while ($heckleskull_query->have_posts()):
                                $heckleskull_query->the_post();
                                $heckleskull_url = get_field("image");
                        ?>
                                <div class="flex-item ">
                                    <img src="<?php echo $heckleskull_url ?>" alt="Promotional poster for Heckle hole.">
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>

    </section>


</main><!-- #main -->

<?php
get_footer();
