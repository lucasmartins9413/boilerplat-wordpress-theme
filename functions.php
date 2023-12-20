<?php

// Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/breadcrumb.php';
require get_template_directory().'/include/customizer/theme-customizer.php';



//Hooks
add_action("bp_enqueue_scripts","bp_theme_styles");
add_action("after_setup_theme","bp_after_setup");
add_action("widgets_init","bp_widgets");
add_action("customize_register","bp_customize_register");


// add_filter( 'the_content', 'tt_reading_time_filter' );
