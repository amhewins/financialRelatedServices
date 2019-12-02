<?php
  /*
  * Template Name: Resources Template
  *
  */
 ?>
 <?php
   get_header();
  ?>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Resources
      </h1>
    </div> <!--container has-text-centered-->
  </div> <!--hero-body-->
    </section>
    <section class="container">
      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_a_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_a_title'); ?></h4>
                <p><a href="<?php the_field('box_a_link'); ?>"><?php the_field('box_a_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_b_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_b_title'); ?></h4>
                <p><a href="<?php the_field('box_b_link'); ?>"><?php the_field('box_b_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_c_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_c_title'); ?></h4>
                <p><a href="<?php the_field('box_c_link'); ?>"><?php the_field('box_c_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns features">
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_d_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_d_title'); ?></h4>
                <p><a href="<?php the_field('box_d_link'); ?>"><?php the_field('box_d_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_e_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_e_title'); ?></h4>
                <p><a href="<?php the_field('box_e_link'); ?>"><?php the_field('box_e_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <img src="<?php the_field('box_f_image'); ?>" />
            </div>
            <div class="card-content">
              <div class="content">
                <h4><?php the_field('box_f_title'); ?></h4>
                <p><a href="<?php the_field('box_f_link'); ?>"><?php the_field('box_f_link_name'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="intro column is-8 is-offset-2">
        <h2 class="title"><?php the_field('resources_secondary_title'); ?></h2><br>
        <p class="subtitle"><?php the_field('resources_secondary_caption'); ?></p>
      </div>
    </section>

  <?php
    get_footer();
   ?>
