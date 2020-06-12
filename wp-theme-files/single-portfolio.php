<?php get_header(); ?>

  <section>
    <div class="row justify-content-around">
      <div id="portfolio-gallery" class="col-12 gallery">
        <?php
          $images = get_field('gallery');
          if($images):
            $i = 0;
            foreach($images as $image): ?>

              <a href="<?php echo esc_url($image['url']); ?>" class="gallery-item" data-toggle="modal" data-target="#gallery-modal" data-initial_slide="<?php echo $i; ?>">
                <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
              </a>

          <?php $i++; endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <div id="gallery-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <?php if($images): ?>
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php foreach($images as $image): ?>
                  <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </div>
                <?php endforeach; ?>
              </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
<?php get_footer();
