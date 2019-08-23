<?php get_header(); ?>
  <section class="row">
    <?php while (have_posts()) : the_post(); ?>
      <article class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </section>

<?php while (have_rows('gallery_block')): the_row(); ?>
  <?php if (get_sub_field("gallery")): ?>
    <section>
      <?php echo do_shortcode('[modula id="' . get_sub_field("gallery") . '"]') ?>
    </section>
  <?php endif; ?>
  <section class="row quote">
    <blockquote class="col-10 col-md-6">
      <p><?php the_sub_field("quote_body"); ?></p>
      <cite>&mdash;<?php the_sub_field("quote_author"); ?></cite>
    </blockquote>
  </section>
<?php endwhile; ?>

<?php get_template_part("template-parts/widgets/pre-footer"); ?>

  <section class="row front-contact">
    <div class="col-md-4 col-sm-12">
      <?php if (get_field("contact_image")): ?>
        <img class="img-fluid" src="<?php echo get_field("contact_image")["sizes"]["large"] ?>" alt="Contact"/>
      <?php endif; ?>
    </div>
    <div class="col-md-8 col-sm-12">
      <div class="row quote">
        <section class="col-12 col-md-10 offset-md-2">
          <img class="img-fluid contact-logo" src="<?php echo get_template_directory_uri() ?>/img/logo-med.png"
               alt="Logo"/>
        </section>
        <section class="col-12 col-md-10 offset-md-2 text-center text-md-left">
          <a class="button" href="<?php echo get_permalink(get_page_by_path("contact")) ?>">Contact</a>
        </section>
        <blockquote class="col-7">
          <p>Photography is a love affair with life</p>
          <cite>&mdash;Burk Uzzle</cite>
        </blockquote>
      </div>
    </div>
  </section>
<?php
get_footer();
