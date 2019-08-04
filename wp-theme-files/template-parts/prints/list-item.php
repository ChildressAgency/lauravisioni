<?php if (get_field("image")):
  $orientation = cai_get_print_orientation(get_field("image"));
  ?>

  <a class="col-md-4 col-sm-12" href="<?php the_permalink(); ?>">
    <div class="print <?php echo $orientation ?>">
      <img src="<?php echo get_field("image")["sizes"]["medium"] ?>" alt="<?php echo get_the_title() ?>"/>
    </div>
  </a>

<?php endif; ?>
