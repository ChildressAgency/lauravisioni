<?php get_header(); ?>
  <section class="row posts client-galleries">

    <?php
    $clients = new WP_Query(array(
      'post_type' => 'project',
      'post_status' => 'publish',
      'posts_per_page' => -1
    ));
    if ($clients->have_posts()): while ($clients->have_posts()): $clients->the_post(); ?>
      <a href="<?php the_permalink() ?>" class="col-md-4 col-sm-12 post-block"
         id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        $image = has_post_thumbnail() ?
          get_the_post_thumbnail_url($post, "medium_large")
          : get_template_directory_uri() . "/img/gallery_default.png";
        ?>
        <div class="post-thumbnail" style="background-image: url('<?php echo $image ?>')"></div>
        <h3 class="post-title text-center"><?php the_title() ?></h3>

      </a>
    <?php
    endwhile;
    endif;
    ?>
  </section>
<?php get_footer();
