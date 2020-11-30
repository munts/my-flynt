<?php

/**
 * Template Name: Secondary Page w/ Sidebar
 * Description: A Page Template for secondary pages that need a sidebar.
 */

use Timber\Timber;
use Timber\Post;
$dynamicSidebar = get_field('sidebar_to_use');
$context = Timber::get_context();
$context['post'] = new Post();
$context['dynamic_sidebar'] = Timber::get_widgets($dynamicSidebar);
Timber::render('templates/secondary-page-w-sidebar.twig', $context);
