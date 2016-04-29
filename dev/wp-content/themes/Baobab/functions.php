<?php

function the_custom_excerpt(){
    echo get_the_custom_excerpt();
}

function get_the_custom_excerpt(){
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $the_str = substr( $excerpt, 0, 150);
    return $excerpt;
}
 ?>
