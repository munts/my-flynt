<?php

use ACFComposer\ResolveConfig;
use Flynt\Api;
use Flynt\Components;

call_user_func(function () {
    $basePath = __DIR__;
    global $flyntCurrentOptionCategory;
    $flyntCurrentOptionCategory = 'component';
    Api::registerComponentsFromPath($basePath);
});

add_action('Flynt/afterRegisterComponents', function () {
    $store = acf_get_local_store('fields');
    $pageComponents = $store->get('pageComponents');
    $layouts = [
        Components\AccordionDefault\getACFLayout(),
        //Components\BlockCountUp\getACFLayout(),
        Components\BlockImageTextParallax\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        Components\FormContactForm7\getACFLayout(),
        Components\FormNewsletter\getACFLayout(),
        Components\HeroCta\getACFLayout(),
        Components\HeroImageCta\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        Components\HeroSlider\getACFLayout(),
        Components\HeroTextImage\getACFLayout(),
        Components\ListIcons\getACFLayout(),
        Components\ListLogos\getACFLayout(),
        Components\ListSocial\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
        Components\SpecialsPackagesSlider\getACFLayout(),
        Components\BlockCustomHtml\getACFLayout(),
        Components\BlockMapEmbed\getACFLayout(),
    ];
    foreach ($layouts as $layout) {
        $config = ResolveConfig::forLayout($layout, ['pageComponents_pageComponents']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponents['layouts'][] = $config;
    }
    $store->set($pageComponents['key'], $pageComponents);
}, 11);

add_action('Flynt/afterRegisterComponents', function () {
    $secondaryStore = acf_get_local_store('fields');
    $pageComponentsSecondary = $secondaryStore->get('pageComponentsSecondary');
    $secondaryLayouts = [
        Components\AccordionDefault\getACFLayout(),
        //Components\BlockCountUp\getACFLayout(),
        //Components\BlockImageTextParallax\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        // Components\FormContactForm7\getACFLayout(),
        // Components\FormNewsletter\getACFLayout(),
        //Components\HeroCta\getACFLayout(),
        //Components\HeroImageCta\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        //Components\HeroSlider\getACFLayout(),
        Components\HeroTextImage\getACFLayout(),
        Components\ListIcons\getACFLayout(),
        //Components\ListLogos\getACFLayout(),
        //Components\ListSocial\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
        Components\SpecialsPackagesSlider\getACFLayout(),
        Components\BlockCustomHtml\getACFLayout(),
    ];
    foreach ($secondaryLayouts as $secondaryLayout) {
        $config = ResolveConfig::forLayout($secondaryLayout, ['pageComponentsSecondary_pageComponentsSecondary']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponentsSecondary['layouts'][] = $config;
    }
    $secondaryStore->set($pageComponentsSecondary['key'], $pageComponentsSecondary);
}, 11);

add_action('Flynt/afterRegisterComponents', function () {
    $homepageStore = acf_get_local_store('fields');
    $pageComponentsHome = $homepageStore->get('pageComponentsHome');
    $homepageLayouts = [
        Components\HeroSlider\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
        Components\SpecialsPackagesSlider\getACFLayout(),
        Components\AccordionDefault\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        Components\BlockVideoOembed\getACFLayout(),
        Components\BlockWysiwyg\getACFLayout(),
        Components\GridImageText\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
        Components\BlockCustomHtml\getACFLayout(),
    ];
    foreach ($homepageLayouts as $homepageLayout) {
        $config = ResolveConfig::forLayout($homepageLayout, ['pageComponentsHome_pageComponentsHome']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponentsHome['layouts'][] = $config;
    }
    $homepageStore->set($pageComponentsHome['key'], $pageComponentsHome);
}, 11);

add_action('Flynt/afterRegisterComponents', function () {
    $accommodationsStore = acf_get_local_store('fields');
    $pageComponentsAccommodations = $accommodationsStore->get('pageComponentsAccommodations');
    $accommodationsLayouts = [
        Components\HeroSlider\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
        Components\SpecialsPackagesSlider\getACFLayout(),
        Components\AccordionDefault\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        Components\BlockVideoOembed\getACFLayout(),
        Components\BlockWysiwyg\getACFLayout(),
        Components\GridImageText\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
    ];
    foreach ($accommodationsLayouts as $accommodationsLayout) {
        $config = ResolveConfig::forLayout($accommodationsLayout, ['pageComponentsAccommodations_pageComponentsAccommodations']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponentsAccommodations['layouts'][] = $config;
    }
    $accommodationsStore->set($pageComponentsAccommodations['key'], $pageComponentsAccommodations);
}, 11);

add_action('Flynt/afterRegisterComponents', function () {
    $secondaryWithSidebarStore = acf_get_local_store('fields');
    $pageComponentsSecondaryWithSidebar = $secondaryWithSidebarStore->get('pageComponentsSecondaryWithSidebar');
    $secondaryWithSidebarLayouts = [
        Components\AccordionDefault\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        Components\HeroTextImage\getACFLayout(),
        Components\ListIcons\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
        Components\SpecialsPackagesSlider\getACFLayout(),
        Components\BlockCustomHtml\getACFLayout(),
    ];
    foreach ($secondaryWithSidebarLayouts as $secondaryWithSidebarLayout) {
        $config = ResolveConfig::forLayout($secondaryWithSidebarLayout, ['pageComponentsSecondaryWithSidebar_pageComponentsSecondaryWithSidebar']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponentsSecondaryWithSidebar['layouts'][] = $config;
    }
    $secondaryWithSidebarStore->set($pageComponentsSecondaryWithSidebar['key'], $pageComponentsSecondaryWithSidebar);
}, 11);
