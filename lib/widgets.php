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

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Column One',
        'id' => 'footer_col_one',
        'description' => 'This is the first dolumn in the footer',
        'before_widget' => '<div class="widget %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Column Two',
        'id' => 'footer_col_two',
        'description' => 'This is the second dolumn in the footer',
        'before_widget' => '<div class="widget %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Column Three',
        'id' => 'footer_col_three',
        'description' => 'This is the third dolumn in the footer',
        'before_widget' => '<div class="widget %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
