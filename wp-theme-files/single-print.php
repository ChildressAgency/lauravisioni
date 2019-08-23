<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="row justify-content-start" id="print-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (get_field("image")):
      $orientation = cai_get_print_orientation(get_field("image"));
      ?>
      <div class="col-1 prev-link">
        <?php previous_post_link("%link", " "); ?>
      </div>
      <div class="col-10 image text-center">
        <img src="<?php echo get_field("image")["sizes"]["large"] ?>" alt="<?php the_title() ?>"
             class="img-fluid large-image"/>
      </div>
      <div class="col-1 next-link">
        <?php next_post_link("%link", " "); ?>
      </div>

      <section class="col-md-5 offset-md-1 col-sm-12">
        <div class="print <?php echo $orientation ?>">
          <img src="<?php echo get_field("image")["sizes"]["medium_large"] ?>"
               alt="<?php the_title() ?>"/>
        </div>
      </section>

      <section class="col-md-5 col-sm-12 description">
        <h2><?php the_title() ?></h2>
        <h3><?php echo get_field("subtitle") ?></h3>

        <p><?php the_content() ?></p>
        <?php if (have_rows("sizes")): ?>
          <p>Available in these sizes:</p>
          <div class="left-border">
            <?php while (have_rows("sizes")): the_row(); ?>
              <p class="size"><?php echo get_sub_field("width") ?>&rdquo; x
                <?php echo get_sub_field("height") ?>&rdquo;</p>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </section>

      <section class="col-md-5 offset-md-1 col-sm-12">
        <a href="<?php echo get_permalink(get_page_by_path("prints")) ?>" class="link-back">&lt; Back to All Prints</a>
      </section>

      <section class="col-md-4 offset-md-1 col-sm-12">
        <a href="<?php echo get_permalink(get_page_by_path("contact")) ?>" class="button">Contact for Pricing</a>
      </section>
    <?php endif; ?>
  </section>
<?php endwhile; ?>

<?php get_footer();
