<?php get_header(); ?>

<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    if (is_user_logged_in()) {
      get_template_part("template-parts/projects/single");
    } else {
      get_template_part("template-parts/projects/auth");
    }
  }
}
get_footer();
