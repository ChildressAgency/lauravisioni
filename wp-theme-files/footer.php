<footer id="footer">
    <div class="social-icons">
      <?php if (get_field('instagram_url', 'option')): ?>
          <a href="<?php the_field('instagram_url', 'option') ?>">
              <img src="<?php echo get_template_directory_uri() ?>/img/instagram.png" alt="Instagram"/>
          </a>
      <?php endif ?>
      <?php if (get_field('twitter_url', 'option')): ?>
          <a href="<?php the_field('twitter_url', 'option') ?>">
              <img src="<?php echo get_template_directory_uri() ?>/img/twitter.png" alt="Twitter"/>
          </a>
      <?php endif ?>
      <?php if (get_field('pinterest_url', 'option')): ?>
          <a href="<?php the_field('pinterest_url', 'option') ?>">
              <img src="<?php echo get_template_directory_uri() ?>/img/pinterest.png" alt="Pinterest"/>
          </a>
      <?php endif ?>
      <?php if (get_field('facebook_url', 'option')): ?>
          <a href="<?php the_field('facebook_url', 'option') ?>">
              <img src="<?php echo get_template_directory_uri() ?>/img/facebook.png" alt="Facebook"/>
          </a>
      <?php endif ?>
    </div>
    <div class="row">
        <div class="col-sm line"></div>
        <div class="copyright">Copyright © 2019 Laura Visioni Photography</div>
        <div class="col-sm line"></div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
