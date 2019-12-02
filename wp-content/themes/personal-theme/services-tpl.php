<?php
  /*
  * Template Name: Services Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Services
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>
    <section class="container">
      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_one_title'); ?></h4>
                <p><?php the_field('service_one_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_two_title'); ?></h4>
                <p><?php the_field('service_two_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_three_title'); ?></h4>
                <p><?php the_field('service_three_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_four_title'); ?></h4>
                <p><?php the_field('service_four_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_five_title'); ?></h4>
                <p><?php the_field('service_five_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_six_title'); ?></h4>
                <p><?php the_field('service_six_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('service_seven_title'); ?></h4>
                <p><?php the_field('service_seven_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php
    get_footer();
   ?>
