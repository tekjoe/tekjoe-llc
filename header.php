<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description"
    content="Joe Ramirez – Freelance web developer with a proven track record of helping small businesses grow and prosper online." />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127178111-3"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-127178111-3');
  </script>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-KD3DF4C');
  </script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD3DF4C" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="container">
    <main class="grid">
      <header class="header">
        <div class="logo"><a class="link" href="<?php echo site_url(''); ?>"><span>&lt;tekjoe/&gt;</span></a></div>
        <nav>
          <ul class="nav hidden-small">
            <li><a class="link" href="<?php echo site_url('/about'); ?>"><span>About</span></a></li>
            <li><a class="link" href="<?php echo site_url('/work'); ?>"><span>Work</span></a></li>
            <li><a class="link" href="<?php echo site_url('/contact'); ?>"><span>Contact</span></a></li>
            <li><a class="link" href="<?php echo site_url('/blog'); ?>"><span>Blog</span></a></li>
          </ul>
        </nav>
        <?php get_template_part('partials/mobile-nav'); ?>
      </header>