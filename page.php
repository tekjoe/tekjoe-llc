<?php get_header();
while (have_posts()) {
    the_post(); ?>

<section class="post">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</section>
<?php get_template_part('partials/signup'); ?>
<?php
} ?>
<?php get_footer(); ?>