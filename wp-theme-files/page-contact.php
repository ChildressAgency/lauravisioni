<?php
/* Template Name: Contact Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="row">
    <?php if (get_field("contact_image")) : ?>
      <div class="col-md-10 col-sm-12">
        <img class="img-fluid" src="<?php echo get_field("contact_image") ?>" alt=""/>
      </div>
    <?php endif ?>

    <article class="col-md-10 col-sm-12" <?php post_class(); ?>>
      <h2 class="page-title"><?php the_title() ?></h2>
      <div class="page-content left-border">
        <?php the_content(); ?>
      </div>
    </article>

    <div class="col-md-10 col-sm-12">
      <?php
      $code = '[contact-form-7 id="' . get_field("contact_form") . '"]';
      echo do_shortcode($code);
      ?>
    </div>
  </section>
<?php endwhile; ?>

<?php
get_footer();
