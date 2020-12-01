<?php get_header(); ?>

<?php

  while (have_posts()) {
      the_post(); ?>
<section class="post">
  <h1 class="post__title"><?php the_title(); ?></h1>
  <div class="byline">
    <h3 class="post__author">
      <a href="#" class="link"><span><?php the_author(); ?></span></a> – <?php the_time('F j, Y'); ?>
    </h3>
  </div>
  <article class="post__body">
    <?php the_content(); ?>
  </article>
</section>
<?php
  }
?>
<?php get_footer(); ?>