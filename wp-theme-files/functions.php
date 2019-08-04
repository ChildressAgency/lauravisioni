<?php

add_action('wp_footer', 'show_template');
function show_template()
{
  global $template;
  print_r($template);
}

add_action('wp_enqueue_scripts', 'cai_scripts');
function cai_scripts()
{
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
}

add_filter('script_loader_tag', 'cai_add_script_meta', 10, 2);
function cai_add_script_meta($tag, $handle)
{
  switch ($handle) {

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'cai_styles');
function cai_styles()
{
  wp_register_style(
    'google-fonts',
    'https://fonts.googleapis.com/css?family=Maitree:400,700|Nunito+Sans:400,600,700|Nunito:700'
  );

  wp_register_style(
    'cai-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('google-fonts');
  wp_enqueue_style('cai-css');
}

add_filter('style_loader_tag', 'cai_add_css_meta', 10, 2);
function cai_add_css_meta($link, $handle)
{
  switch ($handle) {
    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_setup_theme', 'cai_setup');
function cai_setup()
{
  add_theme_support('post-thumbnails', array('post', 'page', 'print'));
  add_theme_support('custom-logo');

  register_nav_menus(array(
    'header-nav' => 'Header Navigation'
  ));
}

add_action('init', 'cai_create_post_types');
function cai_create_post_types()
{
  register_post_type("print", array(
    "public" => true,
    "labels" => array(
      "name" => "Prints",
      "singular" => "Print"
    )
  ));
  flush_rewrite_rules();
}

add_action('widgets_init', 'cai_widgets_init');
function cai_widgets_init()
{

  register_sidebar(
    array(
      'name' => __('Footer', 'lauravisioni'),
      'id' => 'sidebar-1',
      'description' => __('Add widgets here to appear in your footer.', 'lauravisioni'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );

}

function cai_get_print_orientation($image)
{
  return $image["width"] > $image["height"] ? "landscape" : "portrait";
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';
require_once dirname(__FILE__) . '/includes/custom-fields.php';
