<?php

/**
 * Template Name: Secondary Page
 * Description: A Page Template for secondary pages.
 */

use Timber\Timber;
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();

Timber::render('templates/secondary-page.twig', $context);
