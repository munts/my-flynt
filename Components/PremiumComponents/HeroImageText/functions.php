<?php

namespace Flynt\Components\HeroImageText;

function getACFLayout()
{
    return [
        'name' => 'heroImageText',
        'label' => 'Hero: Image Text',
        'sub_fields' => [
            [
                'label' => __('Images', 'flynt'),
                'name' => 'accordionImages',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'type' => 'group',
                'name' => 'images',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'label' => __('Desktop Image', 'flynt'),
                        'name' => 'imageDesktop',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png',
                        'required' => 1,
                        'instructions' => __('Image-Format: JPG, PNG. Recommended resolution greater than 2048 x 800 px.', 'flynt'),
                    ],
                    [
                        'label' => __('Mobile Image', 'flynt'),
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png',
                        'required' => 1,
                        'instructions' => __('Image-Format: JPG, PNG. Recommended resolution greater than 750 x 800 px.', 'flynt'),
                    ]
                ]
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'accordionContent',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'instructions' => __('The content overlaying the image. Character Recommendations: Title: 30-100, Content: 80-250.', 'flynt'),
            ]
        ]
    ];
}
