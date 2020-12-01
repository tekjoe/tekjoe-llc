<?php get_header(); ?>
<div class="masthead masthead__blog">
  <h1 class="font--med">
    My musings on web development, freelancing, productivity, movies, tech, and more.
  </h1>
</div>
<section class="articles">
  <?php
      while (have_posts()) {
          the_post(); ?>
  <article class="article article_blog">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Blog Post Thumbnail" />
    <a href="<?php echo site_url('/category/' . strip_tags(get_the_category_list(','))); ?>"
      class="link--green link font--small"><span><?php echo strip_tags(get_the_category_list(',')); ?></span></a>
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
<section class="pagination">
  <?php
   next_posts_link('<span>More ⇢</span>');
   previous_posts_link('<span>⇠ Back</span>');
  ?>
</section>
<?php get_footer(); ?>