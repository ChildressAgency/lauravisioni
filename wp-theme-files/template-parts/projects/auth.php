<section class="row project">

  <?php if (has_post_thumbnail()): ?>
    <img class="img-fluid col-md-7 col-12 mb-3" alt="<?php the_title() ?>"
         src="<?php echo get_the_post_thumbnail_url($post, "large") ?>"/>
  <?php endif; ?>

  <div class="col-md-5 col-12 text-center project-auth">
    <h2><?php the_title() ?></h2>
    <?php the_content(); ?>
  </div>
</section>
