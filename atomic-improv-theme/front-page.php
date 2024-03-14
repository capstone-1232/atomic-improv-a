<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="frontpage-top">
    <div class="container">
      <!-- video / gif goes here -->
      <h1>Atomic<br><span>Improv</span></h1>
      <p>Edmonton's premiere improv comedy team</p>
      <a href="contact-us">Book Us</a>
    </div><!-- .container -->
  </section>
  <section class="about-atomic-improv">
    <div class="container">
      <a href="who-we-are"><img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/aboutimg.webp"
          alt="donovan posing"></a>
      <h2>Who We Are</h2>
      <p>We are Atomic Improv, a cornerstone of Edmonton’s improv scene for over 30 years.</p>
      <a href="who-we-are">More About Us</a>
    </div>
  </section>
  <section class="what-we-do">
    <div class="container">
      <img
          src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/whatwedoimg.webp"
          alt="corporate poster">
      <h2>What We Do</h2>
      <p>Customized shows for your events</p>
      <p>Our interactive, custom and hilarious shows are the perfect fit for any audience. Fast, funny and tailored to
        the crowd, Atomic Improv is always a hit.</p>
      <a href="what-we-do">Learn More</a>
      <section class="power-of-yes">
        <h3>Corporate Workshops</h3>
        <a href="what-we-do"><img
            src="http://atomic-improv-a.web.dmitcapstone.ca/wp-content/themes/atomic-improv-theme/images/powerofyeslogo.webp"
            alt="Power of Yes Logo"></a>
        <p>Unlock your teams full potential with the Power of Yes! our customizable corporate workshop that can help teams
          boost their creativity and communication skills.</p>
        <a href="what-we-do#power-of-yes">Learn More</a>
      </section>

    </div>
  </section>
  <section class="socialmedia">
    <div class="container">
      <h2>#atomicimprov</h2>
      <p>The Latest from...</p>
      <div class="socialflex">
        <section>
          <h3>Instagram</h3>
          <p>(Insert most recent Insta post here)</p>
        </section>
        <section>
          <h3>Facebook</h3>
          <p>(Insert most recent FB post here)</p>
        </section>
        <section>
          <h3>Youtube</h3>
          <p>(Insert most recent Youtube post here)</p>
        </section>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();