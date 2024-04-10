<?php

// This is the template for the contact page. It will have the form

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
  <section class="contact-us">
    <div class="container">
      <h1>Contact Us</h1>
      <section class="contact-info">
        <h2>Donovan Workun</h2>
        <p><a href="tel:780-995-3663">Phone: (780)995-3663</a></p>
        <p><a href="mailto:donovan@atomicimprov.ca">Email: donovan@atomicimprov.ca</a></p>
      </section>
      <section class="get-in-touch">
        <h2>Get in Touch</h2>
        <?php echo do_shortcode('[forminator_form id="69"]'); ?>
      </section>
    </div> <!-- .container -->
  </section>
</main><!-- #main -->

<?php
get_footer();



/* Validation Check, Please Do Not Remove */
/*-----------------------------------------
HTML validated 04/05/24
-----------------------------------------*/