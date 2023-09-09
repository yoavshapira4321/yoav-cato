<?php 

function cato_load_scripts() {
  // Enqueue custom font
  wp_enqueue_style('custom-font', 'https://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro', array(), null);

  // Enqueue header desktop stylesheet
  wp_enqueue_style('header_desktop_style', get_template_directory_uri() . '/assets/css/header_style/header_style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('header_desktop_script', get_template_directory_uri() . '/assets/js/header-script.js', array(), '1.0.0', 'all');


  // Check if the current page uses the 'cato-education-page.php' template
  if ( is_page_template( 'cato-education-page.php' ) ) {
      // Enqueue cato education stylesheet only for the specific template
      wp_enqueue_style('cato-education-style', get_template_directory_uri() . '/assets/css/cato-education-style/cato-education-style.css', array(), '1.0.0', 'all');
      wp_enqueue_script( 'cato-education-script', get_template_directory_uri() . '/assets/js/cato-education-script.js', array(), '1.0.0', 'all');
  }
  if ( is_page_template( 'cato-knowledge-base.php' ) ) {
    // Enqueue cato education stylesheet only for the specific template
    wp_enqueue_style('cato-knowledge-base-style', get_template_directory_uri() . '/assets/css/cato-knowledge-style/cato-knowledge.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'cato-knowledge-base-script', get_template_directory_uri() . '/assets/js/cato-knowledge-script.js', array(), '1.0.0', 'all');

}
}
add_action('wp_enqueue_scripts', 'cato_load_scripts');


add_action('wp_enqueue_scripts', 'cato_load_scripts');

function yaelsite_theme_init()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('admin-bar', array('callback' => '__return_false'));
  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'yael'),
      'footer' => __('Footer Menu', 'yael')
    )
  );
}

add_action('after_setup_theme', 'yaelsite_theme_init');
add_action('acf/init' ,'my_acf_option_init');
function my_acf_option_init() {
  if(function_exists('my_acf_option_init')) {
    $options_page = acf_add_options_page(array(
      'page_title' => __('Theme Setting'),
      'menu_title' => __('Theme Setting'),
      'menu_slug' => 'theme-setting',
      'capability' => 'edit_posts',
      'redirect' => false,

    ));
  }
}