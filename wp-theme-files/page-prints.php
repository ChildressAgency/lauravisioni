<?php get_header(); ?>

  <section class="row">
    <div class="col-md-2 col-sm-12 print-categories">

    </div>
    <?php
    $prints = new WP_Query(array(
      'post_type' => 'print',
      'post_status' => 'publish',
      'posts_per_page' => -1
    ));
    if ($prints->have_posts()): while ($prints->have_posts()): $prints->the_post();
      if (get_field("image")):
        $orientation = cai_get_print_orientation(get_field("image"));
        ?>

        <a class="col-md-4 col-sm-12" href="<?php the_permalink(); ?>">
          <div class="print <?php echo $orientation ?>">
            <img src="<?php echo get_field("image")["sizes"]["medium"] ?>" alt="<?php echo get_the_title() ?>"/>
          </div>
        </a>

      <?php
      endif;
    endwhile;
    endif;
    ?>
  </section>

<?php get_footer();
