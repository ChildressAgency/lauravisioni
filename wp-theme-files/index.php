<?php get_header(); ?>

<?php if (have_posts()) :
  while (have_posts()) : ?>
    <section>
      <?php the_post(); ?>
      <div style="height: 400px"></div>
    </section>
  <?php
  endwhile;
endif;
get_footer();
