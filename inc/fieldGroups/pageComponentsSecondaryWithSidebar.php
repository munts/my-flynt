<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponentsSecondaryWithSidebar',
        'title' => 'Secondary Page W/ Sidebar Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponentsSecondaryWithSidebar',
                'label' => __('Secondary Page Section w/ Sidebar Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Secondary/Sidebar Page  Component', 'flynt'),
                'layouts' => [
                    //Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockGridHTML\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockCustomHtml\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\ListComponents\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SpecialsPackagesSlider\getACFLayout(),
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'sitzmark-secondary-w-sidebar.php'
                ]
            ]
        ],
    ]);
});
