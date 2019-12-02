<?php
  /*
  * Template Name: Testimonials Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Testimonials
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>
    <section class="container testimonial-container">
      <div class="columns testimonial-features">
        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_one'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_one'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_two'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_two'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container testimonial-container">
      <div class="columns testimonial-features">
        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_three'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_three'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_four'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_four'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container testimonial-container">
      <div class="columns testimonial-features">
        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_five'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_five'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-6">
          <div class="card testimonial-card">
            <div class="card-image-testimonial testimonial-image">
              <img src="<?php the_field('testimonial_image_six'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <?php the_field('testimonial_content_six'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php
    get_footer();
   ?>
