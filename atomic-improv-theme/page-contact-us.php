<?php

// This is the template for the contact page. It will have the form

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="contact-us">
    <div class="container">
      <h1 class="margin-top-h1">Contact Us</h1>
      <h2>Donovan Workun</h2>
      <p>Phone: (780) 995-3663</p>
      <p>Email: donovan@atomicimprov.ca</p>
    </div>
  </section>
  <section class="get-in-touch">
    <div class="container">
    <h2>Get in Touch</h2>
    <?php echo do_shortcode('[forminator_form id="69"]'); ?>
    </div> <!-- .container -->
  </section>
</main><!-- #main -->

<?php
get_footer();



/* Validation Check, Please Do Not Remove */
/*-----------------------------------------
HTML validated 04/05/24
-----------------------------------------*/