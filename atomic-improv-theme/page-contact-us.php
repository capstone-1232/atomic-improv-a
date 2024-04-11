<?php

// This is the template for the contact page. It will have the form

// @package Atomic_Improv

get_header();
?>

<main id="primary" class="site-main">
<h1 class="margin-top-h1">Contact Us</h1>
  <section class="contact-us container content-flex">
 
    <section class="flex-item">
      <div class="container contact-info">
        <h2>Donovan Workun</h2>
        <div class="center-container">
        <p><a href="tel:780-995-3663" class="contact-link">Phone: (780) 995-3663</a></p>
        <p><a href="mailto:donovan@atomicimprov.ca" class="contact-link">Email: donovan@atomicimprov.ca</a></p>
        </div>
       
      </div>class="contact-link"
    </section>
    <section class="get-in-touch flex-item">
      <div class="container skinny-container">
        <h2>Get in Touch</h2>
        <?php echo do_shortcode('[forminator_form id="69"]'); ?>
      </div>
    </section>
  </section>
</main><!-- #main -->

<?php
get_footer();



/* Validation Check, Please Do Not Remove */
/*-----------------------------------------
HTML validated 04/05/24
-----------------------------------------*/