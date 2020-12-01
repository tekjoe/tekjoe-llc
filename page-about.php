<?php get_header(); ?>

<div class="masthead masthead__about">
  <h1 class="font--med">My name is Joe Ramirez and I'm a curious problem solver with a passion for web technologies.
  </h1>
</div>
<section class="portrait">
<div class="portrait__container"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>Joe-Ramirez-Portrait.png"
    alt="Joe Ramirez Portrait"></div>  

  </section>
<section class="about">
  <p>Throughout my career, I've always gravitated toward web development and any opportunity to make the complex simple.
    In 2018, I decided to combine my passion for web development and personal development and started my journey as a
    professional web developer.</p>
  <p>Clients often approach me when they need a developer who can provide:</p>
  <ul>
    <li>Responsive HTML/CSS</li>
    <li>Performant websites</li>
    <li>WordPress solutions</li>
    <li>Ongoing support and maintenance</li>
  </ul>
  <p>The work that I provide is of the highest quality, is fully responsive, and is tested on a wide range of devices.
  </p>
  <h2>Skills</h2>
  <p>From the time I started my career as a web developer, I've worked tirelessly to stay on top of cutting edge web
    development tools and techniques.</p>
  <h3>Languages I Employ:</h3>
  <ul class="skills">
    <li><span class="tag">HTML</span></li>
    <li><span class="tag">CSS</span></li>
    <li><span class="tag">SASS</span></li>
    <li><span class="tag">JavaScript</span></li>
    <li><span class="tag">PHP</span></li>
  </ul>
  <h3>Tools I Use:</h3>
  <ul class="skills">
    <li><span class="tag">git</span></li>
    <li><span class="tag">npm</span></li>
    <li><span class="tag">vscode</span></li>
    <li><span class="tag">webpack</span></li>
  </ul>
  <h3>Frameworks I Like:</h3>
  <ul class="skills">
    <li><span class="tag">WordPress</span></li>
    <li><span class="tag">React</span></li>
    <li><span class="tag">Express</span></li>
    <li><span class="tag">Bulma</span></li>
  </ul>
</section>
<?php get_template_part('partials/signup'); ?>
<?php get_footer(); ?>