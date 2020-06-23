<?php get_header(); ?>

  <article class="post">
    <div class="row justify-content-around">
      <?php
      the_post();
      $image = has_post_thumbnail() ?
        get_the_post_thumbnail_url($post, "medium_large")
        : get_template_directory_uri() . "/img/post_default.png";

      $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
      ?>

      <!--<div class="featured-image col-md-10 col-sm-12" style="background-image: url('<?php //echo $image ?>')"></div>-->
      <img src="<?php echo esc_url($image); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($image_alt); ?>" />

      <h3 class="post-date col-md-10 col-sm-12"><?php the_date() ?></h3>

      <h2 class="col-md-10 col-sm-12"><?php the_title() ?></h2>

      <div class="col-md-10 col-sm-12 left-border row justify-content-around post-body">
        <section class="post-content"><?php the_content() ?></section>
      </div>
    </div>

    <div class="row justify-content-around">
      <div class="col-10 row gallery">
        <?php if (get_field("gallery")): ?>
          <?php foreach (get_field("gallery") as $image): ?>
            <a href="<?php echo get_attachment_link($image["id"]) ?>" class="col-md-6 col-sm-12 image">
              <img class="img-fluid" src="<?php echo $image["sizes"]["medium_large"] ?>"
                   alt="<?php echo $image["title"] ?>"/>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="row justify-content-start">
      <section class="col-md-5 offset-md-1 col-sm-6 nav-link">
        <h3><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">&lt; Back to All Pages</a></h3>
      </section>
      <section class="col-md-5 col-sm-6 nav-link text-right">
        <h3><?php next_post_link("%link", "Next Journal Page &gt;") ?></h3>
      </section>
    </div>
  </article>

<?php get_footer();
