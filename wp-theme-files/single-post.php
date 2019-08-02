<?php get_header(); ?>

  <article class="post">
    <div class="row">
      <?php
      the_post();
      $image = has_post_thumbnail() ?
        get_the_post_thumbnail_url($post, "medium_large")
        : get_template_directory_uri() . "/img/post_default.png";
      ?>

      <div class="featured-image col-12" style="background-image: url('<?php echo $image ?>')"></div>

      <h3 class="post-date col-12"><?php the_date() ?></h3>

      <h2 class="col-12"><?php the_title() ?></h2>
    </div>

    <div class="row left-border">
      <section class="post-content"><?php the_content() ?></section>
    </div>

    <div class="row">
      <section class="col-6 nav-link">
        <h3><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">&lt; Back to All Pages</a></h3>
      </section>
      <section class="col-6 nav-link text-right">
        <h3><?php next_post_link("%link", "Next Journal Page &gt;") ?></h3>
      </section>
    </div>
  </article>

<?php get_footer();
