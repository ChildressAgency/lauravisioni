<?php get_header(); ?>

  <section class="row">
    <?php
    $prints = new WP_Query(array(
      'post_type' => 'print',
      'post_status' => 'publish',
      'posts_per_page' => -1
    ));
    if ($prints->have_posts()): while ($prints->have_posts()): $prints->the_post(); ?>
      <article class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><?php the_title() ?></h2>

      </article>

    <?php endwhile; endif; ?>
  </section>

<?php get_footer();
