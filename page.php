<?php

use Timber\Timber;
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();
$context['dynamic_sidebar1'] = Timber::get_widgets('footer_col_one');
$context['dynamic_sidebar2'] = Timber::get_widgets('footer_col_two');
$context['dynamic_sidebar3'] = Timber::get_widgets('footer_col_three');

Timber::render('templates/page.twig', $context);
