<?php

use Timber\Timber;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['posts'] = new PostQuery();
$context['dynamic_sidebar1'] = Timber::get_widgets('footer_col_one');
$context['dynamic_sidebar2'] = Timber::get_widgets('footer_col_two');
$context['dynamic_sidebar3'] = Timber::get_widgets('footer_col_three');
if (isset($_GET['contentOnly'])) {
    $context['contentOnly'] = true;
}

Timber::render('templates/index.twig', $context);
