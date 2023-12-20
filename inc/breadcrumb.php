<?php

function custom_breadcrumbs() {
    echo '<div class="breadcrumbs">';
    if (!is_home()) {
        echo '<a href="' . home_url('/') . '">Home</a> / ';
        if (is_category() || is_single()) {
            the_category(' / ');
            if (is_single()) {
                echo ' / ';
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    echo '</div>';
}