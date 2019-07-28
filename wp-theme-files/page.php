<?php get_header(); ?>
  <section class="row">
    <?php while (have_posts()) : the_post(); ?>
      <article class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </section>

<?php while (have_rows('gallery_block')): the_row(); ?>
  <?php if (get_sub_field("gallery")): ?>
    <section class="row home-gallery">
      <?php
      $code = '[phmm-project id="' . get_sub_field("gallery") . '"]';
      echo $code;
      echo codeneric\phmm\base\frontend\Main::gallery_shortcode($code);
//      echo do_shortcode($code);
      ?>
    </section>
  <?php endif; ?>
  <section class="row quote">
    <blockquote class="col-6">
      <p><?php the_sub_field("quote_body"); ?></p>
      <cite>&mdash;<?php the_sub_field("quote_author"); ?></cite>
    </blockquote>
  </section>
<?php endwhile; ?>
<?php
get_footer();
