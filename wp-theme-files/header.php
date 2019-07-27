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
  <header id="header" class="row <?php echo is_front_page() ? "large" : "small" ?>">
    <div class="logo">
      <?php if (has_custom_logo()) the_custom_logo() ?>
    </div>
  </header>