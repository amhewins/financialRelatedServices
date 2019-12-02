<?php
  /*
  * Template Name: Staff Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Dedicated Staff
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>
    <section class="container">
      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-image card-image-large has-text-centered">
              <img src="<?php the_field('staff_image_box_a'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('staff_name_box_a'); ?></h4>
                <h5><?php the_field('staff_position_box_a'); ?></h5>
                <p><?php the_field('staff_bio_box_a'); ?></p>
                <p><a href="mailto:<?php the_field('staff_contact_email_box_a'); ?>"><?php the_field('staff_contact_box_a'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-image card-image-large has-text-centered">
              <img src="<?php the_field('staff_image_box_b'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('staff_name_box_b'); ?></h4>
                <h5><?php the_field('staff_position_box_b'); ?></h5>
                <p><?php the_field('staff_bio_box_b'); ?></p>
                <p><a href="mailto:<?php the_field('staff_contact_email_box_b'); ?>"><?php the_field('staff_contact_box_b'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php
    get_footer();
   ?>
