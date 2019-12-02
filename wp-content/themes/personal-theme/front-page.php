<?php
  get_header();
?>
<div class="hero-body">
  <div class="container has-text-centered">
    <h1 class="title">
      <?php the_field('home_title'); ?>
    </h1>
    <h2 class="subtitle">
      <?php the_field('home_subtitle'); ?>
    </h2>
    <h3 class="caption">
      <?php the_field('home_caption'); ?>
    </h3>
  </div> <!--container has-text-centered-->
</div> <!--hero-body-->
</section>

<section class="grid-container">
  <div class="grid-content">

  <div class="container">
    <div class="wrapper">
        <div class="grid-box a" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_a_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_a_link'); ?>">
            <h4><?php the_field('home_grid_a_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_a_icon'); ?> fa-4x"></i>
        </a>
      </div>
        <div class="grid-box b" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_b_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_b_link'); ?>">
            <h4><?php the_field('home_grid_b_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_b_icon'); ?> fa-4x"></i>
          </a>
        </div>
        <div class="grid-box c" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_c_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_c_link'); ?>">
            <h4><?php the_field('home_grid_c_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_c_icon'); ?> fa-4x"></i>
          </a>
        </div>
        <div class="grid-box d" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_d_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_d_link'); ?>">
            <h4><?php the_field('home_grid_d_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_d_icon'); ?> fa-4x"></i>
          </a>
        </div>
        <div class="grid-box e" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_e_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_e_link'); ?>">
            <h4><?php the_field('home_grid_e_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_e_icon'); ?> fa-4x"></i>
          </a>
        </div>
        <div class="grid-box f" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_f_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_f_link'); ?>">
            <h4><?php the_field('home_grid_f_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_f_icon'); ?> fa-4x"></i>
          </a>
        </div>
        <div class="grid-box g" style="background: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2) ), url('<?php the_field('home_grid_g_image'); ?>'); background-size: cover;">
          <a href="<?php the_field('home_grid_g_link'); ?>">
            <h4><?php the_field('home_grid_g_text'); ?></h4>
            <i class="fa <?php the_field('home_grid_g_icon'); ?> fa-4x" ></i>
          </a>
        </div>
    </div>
  </div> <!--container-->

</div> <!--content-->


  <div class="intro column is-8 is-offset-2">
    <h2 class="title"><?php the_field('home_secondary_title'); ?></h2><br>
    <p class="subtitle"><?php the_field('home_secondary_caption'); ?></p>
  </div>
</section>

<?php
  get_footer();
?>
