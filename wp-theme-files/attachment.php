<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-1 offset-10 text-right">
      <a href="<?php echo get_permalink($post->post_parent); ?>">
        <img src="<?php echo get_template_directory_uri() ?>/img/close.png" alt="close"/>
      </a>
    </div>
  </div>

  <section class="row no-gutters" id="print-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-1 prev-link">
      <?php previous_image_link("large", "&nbsp;"); ?>
    </div>
    <div class="col-10 image text-center">
      <?php echo wp_get_attachment_image(get_the_ID(), "large", "", array("class" => "img-fluid")); ?>
    </div>
    <div class="col-1 next-link">
      <?php next_image_link("large", "&nbsp;"); ?>
    </div>
  </section>
<?php endwhile; ?>

<?php get_footer();
