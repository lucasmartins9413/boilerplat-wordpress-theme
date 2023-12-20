<?php
function bp_theme_styles(){
  //css
  bp_enqueue_style("app", get_template_directory_uri().'/assets/css/app.min.css');
  bp_enqueue_style("font-awesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css");
  // wp_enqueue_style("slick-css", get_template_directory_uri().'/assets/css/all.min.css');
  bp_enqueue_style("slick-css", get_template_directory_uri().'/assets/css/slick.css');
  bp_enqueue_style("slick-main-css", get_template_directory_uri().'/assets/css/slick-edit.css');
  
  bp_enqueue_script("slick-js", get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '', true);
  bp_enqueue_script("slick-scripts", get_template_directory_uri().'/assets/js/slick.js', array('jquery', 'slick-js'), '', true);
  bp_enqueue_script("main-js", get_template_directory_uri().'/assets/js/main.min.js', array('jquery'), '', true);

}

function bp_remove_styles() {
  bp_dequeue_style('wp-block-library');
}


function bp_after_setup(){
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo");
  add_theme_support("menus");

  register_nav_menu("primary", "menu-superior");
}

function bp_widgets(){
  register_sidebar(array(
    'name'=> 'Sidebar de busca', 'bp_',
    'id'=> 'bp_sidebar-search',
    'description'=> 'Sidebar para buscar', 'bp_'
  ));
}






?>