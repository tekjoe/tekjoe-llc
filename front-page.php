<?php get_header(); ?>
<div class="masthead">
  <h1 class="font--med">
    <?php the_field('description'); ?>
  </h1>
  <h2>
    <a href="<?php echo site_url('/about'); ?>" class="link link--green"><span>More about me</span></a>
  </h2>
</div>
<section class="cta">
  <div class="cta__body">
    <h3 class="cta__subtitle">Latest Work –</h3>
    <h2>Building a better tomorrow, one website at a time.</h2>
    <a href="<?php echo site_url('/work') ?>">See my portfolio</a>
  </div>
  <div class="cta__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>art-museum.svg" alt="" /></div>
</section>
<section class="articles">
  <div class="articles__intro">
    <h3 class="articles__intro-subtitle">Latest articles –</h3>
    <h2>
      My musings on web development, freelancing, productivity, movies, tech, and more.
    </h2>
    <a href="<?php echo site_url('/blog'); ?>" class="link link--green"><span>Read more on my blog</span></a>
  </div>

  <?php
      $args = array(
        'posts_per_page' => 3,
        'orderby' => 'rand'
      );

      $blogposts = new WP_Query($args);

      while ($blogposts->have_posts()) {
          $blogposts->the_post(); ?>
          <article class="article">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Blog Post Thumbnail" />
            <a  href="<?php echo site_url('/category/' . strip_tags(get_the_category_list(','))); ?>" class="link--green link font--small"><span><?php echo strip_tags(get_the_category_list(',')); ?></span></a>
            <h2>
              <a href="<?php the_permalink(); ?>" class="link link--green"><span><?php the_title(); ?></span></a>
            </h2>
            <p>
              <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="link--green link font--small"><span>Read
                more</span></a>
          </article>
  <?php
      }
  ?>
</section>
<?php get_template_part('partials/signup'); ?>
<?php get_footer(); ?>

