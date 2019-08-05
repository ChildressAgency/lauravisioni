<?php get_header(); ?>

  <section>
    <div class="row justify-content-around">
      <div class="col-12 gallery">
        <?php if (get_field("gallery")): ?>
          <?php foreach (get_field("gallery") as $image): ?>
            <a href="<?php echo get_attachment_link($image["id"]) ?>">
              <img class="img-fluid" src="<?php echo $image["sizes"]["medium_large"] ?>"
                   alt="<?php echo $image["title"] ?>"/>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

<?php get_footer();
