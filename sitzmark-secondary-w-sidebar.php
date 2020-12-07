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
$context['dynamic_sidebar1'] = Timber::get_widgets('footer_col_one');
$context['dynamic_sidebar2'] = Timber::get_widgets('footer_col_two');
$context['dynamic_sidebar3'] = Timber::get_widgets('footer_col_three');
Timber::render('templates/secondary-page-w-sidebar.twig', $context);
