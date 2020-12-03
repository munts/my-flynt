<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponentsHome',
        'title' => 'Homepage Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponentsHome',
                'label' => __('Homeopage Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Home Page Component', 'flynt'),
                'layouts' => [
                    //Components\BlockCollapse\getACFLayout(),
                    //Components\BlockImage\getACFLayout(),
                    //Components\BlockGridHTML\getACFLayout(),
                    //Components\BlockImageText\getACFLayout(),
                    //Components\BlockVideoOembed\getACFLayout(),
                    //Components\BlockWysiwyg\getACFLayout(),
                    //Components\GridImageText\getACFLayout(),
                    //Components\GridPostsLatest\getACFLayout(),
                    //Components\ListComponents\getACFLayout(),
                    //Components\SliderImages\getACFLayout(),
                    //Components\SliderImages\getACFLayout(),
                    //Components\SpecialsPackagesSlider\getACFLayout(),
                    Components\BlockMapEmbed\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'sitzmark-homepage.php'
                ]
            ]
        ],
    ]);
});
