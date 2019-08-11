<?php get_header(); ?>

  <section class="row">
    <div class="col-md-2 col-sm-12 print-categories text-center text-md-left">
      <?php get_template_part("template-parts/prints/category-list"); ?>
    </div>
    <?php if (have_posts()): while (have_posts()): the_post();
      get_template_part("template-parts/prints/list-item");
    endwhile;
    endif;
    ?>
  </section>

<?php get_footer();
