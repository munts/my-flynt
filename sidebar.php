<?php

$dynamicSidebar = get_field('sidebar_to_use');
$context = array();
$context['dynamic_sidebar'] = Timber::get_widgets('dynamic_sidebar');
$context['dynamic_sidebar1'] = Timber::get_widgets('footer_col_one');
$context['dynamic_sidebar2'] = Timber::get_widgets('footer_col_two');
$context['dynamic_sidebar3'] = Timber::get_widgets('footer_col_three');
Timber::render('sidebar.twig', $context);
