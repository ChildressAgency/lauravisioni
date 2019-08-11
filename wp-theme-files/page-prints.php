<?php get_header(); ?>

  <section class="row align-items-between">
    <div class="col-md-2 col-sm-12 print-categories text-center text-md-left">
      <?php get_template_part("template-parts/prints/category-list"); ?>
    </div>
    <?php
    $prints = new WP_Query(array(
      'post_type' => 'print',
      'post_status' => 'publish',
      'posts_per_page' => -1
    ));
    if ($prints->have_posts()): while ($prints->have_posts()): $prints->the_post();
      get_template_part("template-parts/prints/list-item");
    endwhile;
    endif;
    ?>
  </section>

<?php get_footer();
