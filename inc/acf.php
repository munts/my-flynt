<?php

namespace Flynt\Acf;

use Flynt\Utils\Options;

add_filter('pre_http_request', function ($preempt, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        $response = wp_cache_get($url, 'oembedCache');
        if (!empty($response)) {
            return $response;
        }
    }
    return false;
}, 10, 3);

add_filter('http_response', function ($response, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        wp_cache_set($url, $response, 'oembedCache');
    }
    return $response;
}, 10, 3);

add_filter('acf/fields/google_map/api', function ($api) {
    $apiKey = Options::getGlobal('Acf', 'googleMapsApiKey');
    if ($apiKey) {
        $api['key'] = $apiKey;
    }
    return $api;
});

add_filter('Flynt/addComponentData?name=NavigationMain', function ($utility) {
    $phoneNum = Options::getGlobal('Acf', 'utilityNavPhone');
    $emailAddress = Options::getGlobal('Acf', 'utilityNavEmail');
    if ($phoneNum) {
        $utility['phoneNum'] = $phoneNum;
    }
    if ($emailAddress) {
        $utility['emailAddress'] = $emailAddress;
    }
    return $utility;
});

// add_filter('Flynt/addComponentData?name=NavigationMain', function ($social) {
//     $phoneNum = Options::getGlobal('Acf', 'utilityNavPhone');
//     $emailAddress = Options::getGlobal('Acf', 'utilityNavEmail');
//     if ($facebook) {
//         $social['facebookUrl'] = $facebook;
//     }
//     if ($twitter) {
//         $social['twitterUrl'] = $twitter;
//     }
//     if ($gplus) {
//         $social['googlePlusUrl'] = $gplus;
//     }
//     if ($youtube) {
//         $social['youtubeUrl'] = $youtube;
//     }
//     return $social;
// });

add_filter('Flynt/addComponentData?name=NavigationMain', function ($siteLogo) {
    $logo = Options::getGlobal('Acf', 'siteLogo');
    if ($logo) {
        $siteLogo['siteLogo'] = $logo;
    }

    return $siteLogo;
});

add_filter('Flynt/addComponentData?name=NavigationBurger', function ($utility) {
    $phoneNum = Options::getGlobal('Acf', 'utilityNavPhone');
    if ($phoneNum) {
        $utility['phoneNum'] = $phoneNum;
    }
    return $utility;
});

add_filter('Flynt/addComponentData?name=NavigationFooterColumns', function ($footerLogo) {
    $logo = Options::getGlobal('Acf', 'footerLogo');
    if ($logo) {
        $footerLogo['footerLogo'] = $logo;
    }

    return $footerLogo;
});

Options::addGlobal('Acf', [
    [
        'name' => 'googleMapsTab',
        'label' => __('Google Maps', 'flynt'),
        'type' => 'tab'
    ],
    [
        'name' => 'googleMapsApiKey',
        'label' => __('Google Maps Api Key', 'flynt'),
        'type' => 'text',
        'maxlength' => 100,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'utilityNavTab',
        'label' => __('Utility Nav Items', 'flynt'),
        'type' => 'tab'
    ],
    [
        'name' => 'utilityNavPhone',
        'label' => __('Utility Nav Phone Number', 'flynt'),
        'type' => 'text',
        'maxlength' => 20,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'utilityNavTab',
        'label' => __('Utility Nav Items', 'flynt'),
        'type' => 'tab'
    ],
    [
        'name' => 'utilityNavEmail',
        'label' => __('Utility Nav Email Address', 'flynt'),
        'type' => 'text',
        'maxlength' => 60,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
    'name' => 'socialMediaTab',
    'label' => __('Social Media', 'flynt'),
    'type' => 'tab'
    ],
    [
        'name' => 'facebookUrl',
        'label' => __('Facebook URL', 'flynt'),
        'type' => 'text',
        'maxlength' => 100,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'googlePlusUrl',
        'label' => __('Google Plus url', 'flynt'),
        'type' => 'text',
        'maxlength' => 60,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'twitterUrl',
        'label' => __('Twitter url', 'flynt'),
        'type' => 'text',
        'maxlength' => 60,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'youtubeUrl',
        'label' => __('YouTube Channel url', 'flynt'),
        'type' => 'text',
        'maxlength' => 60,
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'siteLogoTab',
        'label' => __('Site Logo', 'flynt'),
        'type' => 'tab'
    ],
    [
        'name' => 'siteLogo',
        'label' => __('Site Logo', 'flynt'),
        'type' => 'image',
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
    [
        'name' => 'footerLogo',
        'label' => __('Footer Logo', 'flynt'),
        'type' => 'image',
        'prepend' => '',
        'append' => '',
        'placeholder' => ''
    ],
]);
