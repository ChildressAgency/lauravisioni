<?php get_header(); ?>

  <section class="row posts">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <a href="<?php the_permalink() ?>" class="col-md-4 col-sm-12 post-block"
         id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        $image = has_post_thumbnail() ?
          get_the_post_thumbnail_url($post, "medium_large")
          : get_template_directory_uri() . "/img/post_default.png";
        ?>
        <div class="post-thumbnail" style="background-image: url('<?php echo $image ?>')"></div>
        <h2 class="post-title"><?php the_title() ?></h2>
        <h3 class="post-date"><?php the_date() ?></h3>

      </a>

    <?php endwhile; endif; ?>
  </section>

  <section class="row justify-content-center">
    <div class="col-12 col-md-10">
      <?php get_template_part("template-parts/widgets/pre-footer"); ?>
    </div>
  </section>

<?php get_footer();
