<?php
/* Template Name: About Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="row">
    <?php if (get_field("about_image")) : ?>
      <div class="col-lg-5 col-sm-12">
        <img class="img-fluid about-image" src="<?php echo get_field("about_image") ?>" alt=""/>
      </div>
    <?php endif ?>
    <article class="col-lg-7 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="page-title"><?php the_title() ?></h2>
      <div class="page-content left-border">
        <?php the_content(); ?>
      </div>
    </article>
  </section>

  <section class="row quote">
    <?php if (get_field("quote_body")): ?>
      <blockquote class="col-8 about-quote">
        <p><?php echo get_field("quote_body"); ?></p>
        <cite>&mdash;<?php echo get_field("quote_author"); ?></cite>
      </blockquote>
    <?php endif; ?>
  </section>
<?php endwhile; ?>

  <section class="row justify-content-around">
    <?php if (get_field("contact_image")) : ?>
      <div class="col-md-5 offset-md-1 col-sm-12">
        <img class="contact-image img-fluid" src="<?php echo get_field("contact_image") ?>" alt=""/>
      </div>
    <?php endif ?>
    <div class="col-md-5 col-sm-12 contact-col">
      <p></p>
      <img src="<?php echo get_template_directory_uri() ?>/img/logo-med.png" alt="Logo"/>

      <a class="button" href="<?php echo get_permalink(get_page_by_path("contact")) ?>">Contact</a>
      <p></p>
    </div>
  </section>

<?php
get_footer();
