<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponentsAccommodations',
        'title' => 'Accommodations Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponentsAccommodations',
                'label' => __('Accommodations Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Accommodation Component', 'flynt'),
                'layouts' => [
                    //Components\BlockCollapse\getACFLayout(),
                    //Components\BlockImage\getACFLayout(),
                    //Components\BlockGridHTML\getACFLayout(),
                    //Components\BlockImageText\getACFLayout(),
                    // Components\BlockVideoOembed\getACFLayout(),
                    // Components\BlockWysiwyg\getACFLayout(),
                    // Components\GridImageText\getACFLayout(),
                    //Components\GridPostsLatest\getACFLayout(),
                    //Components\ListComponents\getACFLayout(),
                    //Components\SliderImages\getACFLayout(),
                    //Components\SliderImages\getACFLayout(),
                    //Components\SpecialsPackagesSlider\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'accommodations',
                ]
            ]
        ],
    ]);
});
