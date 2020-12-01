<?php get_header(); ?>
<div id="map"></div>
<?php get_template_part('partials/map'); ?>
<section class="contact">
  <div class="contact__info">
    <div class="content">
      <h2>Let's build something together</h2>
      <p>
        I live and work in Milwaukee, but the internet is my home. If
        you have a quick question or comment, hit me up
        <a href="#" class="link link--green"><span>@_tekjoe</span></a>
        or
        <a href="mailto:joe@tekjoe.org" class="link link--green"><span>send me an email</span></a>.
      </p>
    </div>
    <h2>Have something specific in mind?</h2>
    <p>
      I'm always open to hearing about new projects and opportunities. I
      love working with Wordpress, Javascript, HTML, and CSS.
    </p>
    <p>
      If you want to get in touch about a new project, fill out my
      contact form to get started. I always try to respond to every
      email within a couple of days.
    </p>
    <p class="center-bold"><span class="highlight-container"><span class="highlight">Accepting projects for <?php echo date("F Y", strtotime('+2 month')) ?>.</span></span></p>
  </div>
  <div class="contact__form">
    <?php echo do_shortcode('[contact-form-7 id="39" title="Contact Form"]') ?>
  </div>
</section>
<?php get_footer(); ?>
