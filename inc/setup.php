<?php
function bp_theme_styles(){
  wp_enqueue_style("app", get_template_directory_uri().'/assets/minify/css/app.min.css');
  wp_enqueue_script("main-js", get_template_directory_uri().'/assets/minify/js/main.min.js', array('jquery'), '', true);
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
