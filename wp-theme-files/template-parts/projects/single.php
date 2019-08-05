<article class="row project">
  <h2 class="col-12 text-center"><?php the_title() ?></h2>

  <?php if (has_post_thumbnail()): ?>
    <img class="img-fluid col-12" alt="<?php the_title() ?>"
         src="<?php echo get_the_post_thumbnail_url($post, "large") ?>"/>
  <?php endif; ?>

  <section class="col-12">
    <?php the_content(); ?>
  </section>
</article>
