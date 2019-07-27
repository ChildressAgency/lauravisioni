<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo get_bloginfo('name');
      if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Barlow:400,500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
  <?php if (is_front_page()): ?>
      <header id="header" class="large">
          <div class="logo">
            <?php if (has_custom_logo()) the_custom_logo() ?>
          </div>
          <div class="row">
              <div class="col">
                  menu goes here
              </div>
          </div>
      </header>
  <?php else: ?>
      <header id="header" class="small row">
          <div class="logo col">
            <?php if (has_custom_logo()) the_custom_logo() ?>
          </div>
          <div class="col">
              menu goes here
          </div>
      </header>
  <?php endif ?>
