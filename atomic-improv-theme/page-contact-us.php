<?php

// This is the template for the About Us page.

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
      <form action="http://kjolie3.dmitstudent.ca/capstonetest/success" method="POST">
        <div>
          <input type="text" id="name" name="name">
          <label for="name">Name</label>
        </div>
        <div>
          <input type="text" id="email" name="email">
          <label for="email">Email</label>
        </div>
        <div>
          <input type="text" id="phone" name="phone">
          <label for="phone">Phone</label>
        </div>
        <div>
          <input type="text" id="date" name="date">
          <label for="date">Date</label>
        </div>
        <div>
          <textarea name="comments" id="comments"></textarea>
          <label for="comments">Comments</label>
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();