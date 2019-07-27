<?php

add_action('wp_enqueue_scripts', 'cai_styles');
function cai_styles(){
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
function cai_add_css_meta($link, $handle){
  switch($handle){
    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_setup_theme', 'cai_setup');
function cai_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');

  register_nav_menus(array(
    'header-nav' => 'Header Navigation'
  ));
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

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';
require_once dirname(__FILE__) . '/includes/custom-fields.php';
