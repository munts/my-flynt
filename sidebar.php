<?php
$dynamicSidebar = get_field('sidebar_to_use');
$context = array();
$context['dynamic_sidebar'] = Timber::get_widgets('dynamic_sidebar');
Timber::render('sidebar.twig', $context);
