<?php

namespace Flynt\Components\BlockMapEmbed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockMapEmbed',
        'label' => 'Block: Map Embed',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 1,
                'delay' => 1,
                'instructions' => __('The content overlaying the image. Character Recommendations: Title: 30-100, Content: 80-250.', 'flynt'),
            ],
            [
                'label' => 'Gmaps Fields',
                'name' => 'gmaps',
                'type' => 'google_map',
                'title' => 'Google Maps Embed',
                'sub_fields' => [
                    [
                        'label' => 'Google Map',
                        'name' => 'google_map',
                        'type' => 'google_map',
                        'center_lat' => '',
                        'center_lng' => '',
                        'zoom' => '',
                        'height' => '',
                        'name' => 'someshit',
                        'label' => '',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'label' => __('Map Marker Info Window', 'flynt'),
                'name' => 'markerInfo',
                'type' => 'text',
                'instructions' => __('The content that will display when a user clicks on the map marker', 'flynt'),
            ],
        ]
    ];
}

// function my_acf_google_map_api($api)
// {
//     $api['key'] = 'AIzaSyAAw7_dT-EL15DkqRQg_TnGDml0nab-yIo';

//     return $api;
// }

// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// $context = Timber::get_context();
// $context['gmaps'] = new TimberPost(); // It's a new TimberPost object, but an existing post from WordPress.
// $html = Timber::compile('index.twig', $context, 6000);
// echo $html;//Since once the listing was made, I compiled the template and results saved them to a variable. I also put a 6000 second cache on it - since it will probably not change for a bit.
