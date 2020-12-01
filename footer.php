<footer class="footer">
          <div class="about">
            <h2>&lt;tekjoe/&gt;</h2>
            <p>Freelance web developer with a passion for solving problems. Let's build something together.</p>
            <a href="<?php echo site_url('/about'); ?>" class="link link--green"
              ><span>Learn more about me</span></a
            >
          </div>
          <div class="footer__nav">
            <ul>
              <li>Navigate</li>
              <li>
                <a class="link" href="<?php echo site_url('/about'); ?>"><span>About</span></a>
              </li>
              <li>
                <a class="link" href="<?php echo site_url('/contact'); ?>"><span>Contact</span></a>
              </li>
              <li>
                <a class="link" href="<?php echo site_url('/blog'); ?>"><span>Blog</span></a>
              </li>
            </ul>
            <ul>
              <li>Connect</li>
              <li>
                <a class="link" href="https://www.instagram.com/tekjoe" target="_blank" rel="noopener"><span>Instagram</span></a>
              </li>
              <li>
                <a class="link" href="https://www.twitter.com/_tekjoe" target="_blank" rel="noopener"><span>Twitter</span></a>
              </li>
              <li>
                <a class="link" href="https://codepen.io/tekjoe/" target="_blank" rel="noopener"><span>CodePen</span></a>
              </li>
            </ul>
            <ul>
              <li>
                © <?php echo date('Y'); ?>
              </li>
              <li>
                <a class="link" href=""><span>MKE</span></a>
              </li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>