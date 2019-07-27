<?php
/* Template Name: About Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="row">
      <?php if (get_field("about_image", "option")) : ?>
          <div class="col-5">
              <img class="about-image" src="<?php echo get_field("about_image", "option") ?>" alt=""/>
          </div>
      <?php endif ?>
        <article class="col-7" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="page-title"><?php the_title() ?></h2>
            <div class="page-content">
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

<?php
get_footer();
