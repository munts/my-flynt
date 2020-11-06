<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponentsSecondary',
        'title' => 'Secondary Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponentsSecondary',
                'label' => __('Secondary Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Secondary Page Component', 'flynt'),
                'layouts' => [
                    //Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockGridHTML\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\ListComponents\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SpecialsPackagesSlider\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'sitzmark-secondary.php'
                ]
            ]
        ],
    ]);
});
