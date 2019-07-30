<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="row" id="print-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (get_field("image")): ?>
      <section class="col-10 image">
        <?php $orientation = get_field("image")["width"] > get_field("image")["height"] ? "landscape" : "portrait"; ?>
        <img src="<?php echo get_field("image")["sizes"]["large"] ?>" alt="<?php the_title() ?>"
             class="img-fluid large-image"/>
      </section>
      <section class="col-md-5 col-sm-12">
        <div class="print <?php echo $orientation ?>">
          <img src="<?php echo get_field("image")["sizes"]["medium_large"] ?>"
               alt="<?php the_title() ?>"/>
        </div>
      </section>
      <section class="col-md-5 col-sm-12 description">
        <h2><?php the_title() ?></h2>
        <h3><?php echo get_field("subtitle") ?></h3>

        <p><?php the_content() ?></p>
        <?php if (has_sub_field("sizes")): ?>
          <p>Available in these sizes:</p>
          <div class="left-border">
            <?php while (have_rows("sizes")): the_row(); ?>
              <p class="size"><?php echo get_sub_field("width") ?>&rdquo; x
                <?php echo get_sub_field("height") ?>&rdquo;</p>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </section>

      <div class="col-md-5 col-sm-12">
        <a href="/" class="link-back">&lt; Back to All Prints</a>
      </div>

      <div class="col-md-4 offset-md-1 col-sm-12">
        <a href="/" class="button">Contact for Pricing</a>
      </div>
    <?php endif; ?>
  </div>
<?php endwhile; ?>

<?php get_footer();
