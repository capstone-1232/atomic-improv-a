<?php

// This is the template for the contact page. It will have the form

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <h1>Contact Us</h1>
  <section class="Contact Info">
    <div class="container">
      <h2>Donovan Workun</h2>
      <p>Phone: (780) 995-3663</p>
      <p>Email: donovan@atomicimprov.ca</p>
    </div><!-- .container -->
  </section>
  <section class="get-in-touch">
    <div class="container">
      <h2>Get in Touch</h2>
      <?php echo do_shortcode('[forminator_form id="69"]'); ?>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();