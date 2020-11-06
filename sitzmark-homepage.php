<?php

/**
 * Template Name: Homepage Template
 * Description: A Page Template for the homepage.
 */

use Timber\Timber;
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();

Timber::render('templates/homepage.twig', $context);
