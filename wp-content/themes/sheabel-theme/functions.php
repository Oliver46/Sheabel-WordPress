<?php

function sheabel_files() {
  // wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(). '1.0', 'all');
  // wp_enqueue_style('university_main_styles', get_stylesheet_uri());

  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); // loads font-awesome
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCpO_ki_1OQnadweReoiirb6ee0GhIbV8M', NULL, '1.0', true);//google maps API KEY (display)
  //wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

  if(strstr($_SERVER['SERVER-NAME'], 'sheabel-wp.test')) { //If you are working locally 
    wp_enqueue_script('main-sheabel-wp-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  }else{
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
    wp_enqueue_script('main-sheabel-wp-js', get_theme_file_uri('/bundled-assets/scripts.b34ada33cd86dc15a2b3.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.b34ada33cd86dc15a2b3.css'));
}
  
  //wp_enqueue_script('main-js', get_theme_file_uri('/js/modules/GoogleMap.js'), NULL, '1.0', true); //Google Map js file
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array('jquery'), '4.5.3', true);
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all');
}

add_action('wp_enqueue_scripts', 'sheabel_files');


function sheabel_theme_setup(){
  //Create menus
  register_nav_menus(array(
    'primary_menu' => __('Main Menu'),
    'footer_menu' => __('Footer Menu')
  ));

  add_theme_support('post-thumbnails'); // WPFeature image | WP thumbnail image
  add_image_size('pageBackground','1920', '525', true); //ACF background image

  add_image_size('historyBackground', '1920', '860', true); // Create my own size for History background image

  //Plugin generate Thumbnails by alex Mills
  //After Installing and activating go to tools -> Regenerate Thumbnails

  //Plugin Manual Image Crop Tomasz Sita: it is used to crop images
  
}
add_action('after_setup_theme', 'sheabel_theme_setup');

// Render Google Map
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyCpO_ki_1OQnadweReoiirb6ee0GhIbV8M';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//Widgets Locations
function sheabel_init_widgets(){

  //About Box1
  register_sidebar(array(
    'name' => 'About Box 1',
    'id' => 'about-box0',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>'
  ));

  //About Box2
  register_sidebar(array(
    'name' => 'About Box 2',
    'id' => 'about-box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>'
  ));
    //About Box3
  register_sidebar(array(
      'name' => 'About Box 3',
      'id' => 'about-box3',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>'
    ));
    //History Box1
  register_sidebar(array(
    'name' => 'History Box 1',
    'id' => 'history-box1',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>'
  ));
   //History Box2
  register_sidebar(array(
    'name' => 'History Box 2',
    'id' => 'history-box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>'
  ));
}
add_action('widgets_init', 'sheabel_init_widgets');

//Customizer File
require get_template_directory() . '/inc/customizer.php';

