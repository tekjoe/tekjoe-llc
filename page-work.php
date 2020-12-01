<?php get_header(); ?>
<div class="masthead masthead__work">
  <h1 class="font--med">Recent Projects</h1>
  <p class="font--small">I work closely with each and every client to make sure that the end product is exactly what
    they envisioned. </p>
</div>
<section class="work__grid">
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>judge.svg"
        alt="Judge Jeff Davis"></div>
    <div class="project__body">
      <h2><a href="https://www.judgejeffdavis.com" target="_blank" rel="noopener" class="link"><span>Judge Jeff
            Davis</span></a></h2>
      <p>Judge Jeff Davis is a Wisconsin Court of Appeals judge who needed a campaign website in a short amount of time.
        In order to deliver a high quality website that was easy to edit, I reached for Gatsby.js yet again.</p>
      <a href="https://www.judgejeffdavis.com" target="_blank" rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>apartment.svg"
        alt="Oak Ridge Contracting"></div>
    <div class="project__body">
      <h2><a href="https://www.oakridgecontracting.com" target="_blank" rel="noopener" class="link"><span>Oak Ridge
            Contracting</span></a></h2>
      <p>Oak Ridge Contracting is a small business in southeastern Wisconsin that was looking to improve their presence
        online. This website is blazing fast because it's powered by Gatbsy.js, a static site generator for React
        applications.</p>
      <a href="https://www.oakridgecontracting.com" target="_blank" rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>wedding.svg"
        alt="Lee's Classic Cars"></div>
    <div class="project__body">
      <h2><a href="https://www.leesclassiccarswi.com" target="_blank" rel="noopener" class="link"><span>Lee's Classic
            Cars</span></a></h2>
      <p>Lee's Classic Cars is a classic car wedding experience that needed the ability to book car reservations on
        their site. This project is powered by WordPress, WooCommerce, and PayPal.</p>
      <a href="https://www.leesclassiccarswi.com" target="_blank" rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>hamburger.svg"
        alt="Birch + Butcher"></div>
    <div class="project__body">
      <h2><a href="https://birchandbutcher.com/" target="_blank" rel="noopener" class="link"><span>Birch +
            Butcher</span></a></h2>
      <p>Birch + Butcher, one of Milwaukee's best dining experiences, needed a website that was easy to maintain and
        easy to look at. This project includes an interactive map featuring nearby attractions, an embedded Instagram
        feed, and an easy to update menu section.</p>
      <a href="https://birchandbutcher.com/" target="_blank" rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>misinformation.svg"
        alt="Hogwash"></div>
    <div class="project__body">
      <h2><a href="http://hogwash.netlify.app/" target='_blank' rel="noopener" class="link"><span>Hogwash Misinformation
            App</span></a></h2>
      <p>In a post-truth world, misinformation reigns supreme. Prove your loved ones wrong with Hogwash – a simple tool
        for debunking fake news and misinformation you read online.</p>
      <a href="http://hogwash.netlify.app/" target='_blank' rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>medicine.svg"
        alt="Coffee Break"></div>

    <div class="project__body">
      <h2><a href="http://joevid-19.netlify.app/" target='_blank' rel="noopener" class="link"><span>COVID-19
            Dashboard</span></a></h2>
      <p>Experiencing information overload? Reduce your COVID-19 anxiety with JOEVID-19 and keep your mind
        quaran-toned. Credit to the <a href="https://covidtracking.com/" target="_blank" class="link"
          rel="noopener">Covid Tracking Project</a> API.
      </p>
      <a href="http://joevid-19.netlify.app/" target='_blank' rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>
  <article class="project">
    <div class="project__image"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>coffee.svg"
        alt="Coffee Break"></div>

    <div class="project__body">
      <h2><a href="http://coffee-logger.herokuapp.com/" target='_blank' rel="noopener" class="link"><span>React Coffee
            Logger</span></a></h2>
      <p>This web application was developed with React, Redux, and Firebase. The goal of the project was to implement
        user authentication and persistent data with Google Firebase.</p>
      <a href="http://coffee-logger.herokuapp.com/" target='_blank' rel="noopener"
        class="link link--green font--small"><span>View Project</span></a>
    </div>
  </article>

</section>
<?php get_template_part('partials/signup'); ?>
<?php get_footer(); ?>