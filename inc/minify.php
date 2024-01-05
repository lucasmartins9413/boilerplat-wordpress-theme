<?php

use MatthiasMullie\Minify;

$minify = filter_input(INPUT_GET, "minify", FILTER_VALIDATE_BOOLEAN);


if($_SERVER["SERVER_NAME"] == 'wordpress.local' || $minify || $_SERVER["SERVER_NAME"] == 'localhost' ){

    $theme_directory = get_template_directory();

    $minCSS = new Minify\CSS();
    $cssDir = scandir($theme_directory . '/assets/css/');

    foreach ($cssDir as $cssItem){
        $cssFile = $theme_directory . '/assets/css/' . $cssItem; 
        
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == 'css') {
            $minCSS->add($cssFile);
        }
    }

    $minCSS->minify($theme_directory . '/assets/minify/css/app.min.css');


    $minJS = new Minify\JS();
    $jsDir = scandir($theme_directory . '/assets/js/');

    foreach ($jsDir as $jsItem){
        $jsFile = $theme_directory . '/assets/js/' . $jsItem; 
        
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == 'js') {
            $minJS->add($jsFile);
        }
    }

    $minJS->minify($theme_directory . '/assets/minify/js/main.min.js');



}
