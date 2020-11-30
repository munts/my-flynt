<?php

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'dynamic_sidebar',
        'description' => 'This is the main sidebar',
        'before_widget' => '<div class="widget %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
