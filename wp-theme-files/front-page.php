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
  <?php if (get_sub_field("gallery")):
    $images = get_sub_field("gallery");
    $layout = get_sub_field("layout");
    $side = $images[0];
    $top = $images[1];
    $bot = $images[2];
    ?>
    <section class="row home-gallery">

      <?php if ($side && ($layout === "left")): ?>
        <div class="col-5 big">
          <a href="<?php echo get_attachment_link($side["id"]) ?>"
             style="background-image: url('<?php echo $side["sizes"]["large"] ?>')"></a>
        </div>
      <?php endif; ?>

      <div class="col col-7 flex-column align-content-stretch">
        <?php if ($top): ?>
          <a href="<?php echo get_attachment_link($top["id"]) ?>">
            <img src="<?php echo $top["sizes"]["large"] ?>" class="img-fluid"
                 alt="<?php echo $top["title"] ?>"/>
          </a>
        <?php endif; ?>
        <?php if ($bot): ?>
          <a href="<?php echo get_attachment_link($bot["id"]) ?>">
            <img src="<?php echo $bot["sizes"]["large"] ?>" class="img-fluid"
                 alt="<?php echo $bot["title"] ?>"/>
          </a>
        <?php endif; ?>
      </div>

      <?php if ($side && ($layout !== "left")): ?>
        <div class="col-5 big">
          <a href="<?php echo get_attachment_link($side["id"]) ?>"
             style="background-image: url('<?php echo $side["sizes"]["large"] ?>')"></a>
        </div>
      <?php endif; ?>

    </section>
  <?php endif; ?>
  <section class="row quote">
    <blockquote class="col-6">
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
          <img class="img-fluid contact-logo" src="<?php echo get_template_directory_uri() ?>/img/logo-med.png" alt="Logo"/>
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
