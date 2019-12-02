<?php
  /*
  * Template Name: Company Overview Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Company Overview
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>

    <section class="container">
      <div class="columns features">
        <div class="column is-12">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <p><?php the_field('page_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="columns sub-features">
        <div class="column is-6">
          <div class="invisible-card">
            <div class="invisible-card-content">
              <div class="content content-block-image">
                <img src="<?php the_field('content_image_one'); ?>" />
              </div>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="invisible-card">
            <div class="invisible-card-content">
              <div class="content content-block-image">
                <img src="<?php the_field('content_image_two'); ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php
    get_footer();
   ?>
