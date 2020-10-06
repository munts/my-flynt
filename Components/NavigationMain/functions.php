<?php

namespace Flynt\Components\NavigationMain;

use Timber;
use Flynt\Utils\Asset;

//$phone = Options::getGlobal('Acf', 'utilityNavTab');

add_action('init', function () {
    register_nav_menus([
        'navigation_main' => __('Navigation Main', 'my-flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationMain', function ($data) {
    $args = array(
        'depth' => 2,
    );
    $data['menu'] = new Timber\Menu('navigation_main', $args);
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationMain/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];
//    $data['phone'] = get_field('utilityNavPhone', 'options');
    return $data;
});
