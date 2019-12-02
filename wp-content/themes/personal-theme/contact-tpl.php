<?php
  /*
  * Template Name: Contact Us Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Contact Us
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>
  <div class="contact-form-container">
    <?php echo do_shortcode('[contact-form-7 id="59" title="Contact Us Form"]'); ?>
    <div class="contact-container"><?php the_field('contact_us'); ?></div>
  </div>

  <?php
    get_footer();
   ?>
