<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo get_bloginfo('name');
    if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link
      href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,500|Barlow:400,500,500i|Josefin+Sans:400,700&display=swap"
      rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
  <header id="header" class="<?php echo is_front_page() ? 'large' : 'small' ?>">
    <?php if (is_front_page()): ?>
      <div class="logo large row">
        <?php if (has_custom_logo()) the_custom_logo() ?>
      </div>
    <?php endif ?>
    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
      <div class="container">
        <?php if (!is_front_page()): ?>
          <?php if (has_custom_logo()) the_custom_logo() ?>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-nav',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'header-navbar',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </div>
    </nav>
  </header>
