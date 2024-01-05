<?php

require_once 'vendor/autoload.php';


// Include
require get_template_directory().'/inc/setup.php';
require get_template_directory().'/inc/minify.php';
require get_template_directory().'/inc/breadcrumb.php';
require get_template_directory().'/inc/customizer/theme-customizer.php';


//Hooks
// add_filter( 'the_content', 'tt_reading_time_filter' );
add_action("wp_enqueue_scripts","bp_theme_styles");
add_action("after_setup_theme","bp_after_setup");
add_action("widgets_init","bp_widgets");
add_action("customize_register","bp_customize_register");