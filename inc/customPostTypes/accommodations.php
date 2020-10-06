<?php

namespace Flynt\CustomPostTypes;

function registerAccommodationsPostType()
{
    $labels = [
     'name'                  => _x('accommodations', 'Post Type General Name', 'flynt'),
     'singular_name'         => _x('accommodation', 'Post Type Singular Name', 'flynt'),
     'menu_name'             => __('Accommodations', 'flynt'),
     'name_admin_bar'        => __('Accommodation', 'flynt'),
     'archives'              => __('Accommodation Archives', 'flynt'),
     'attributes'            => __('Accommodation Attributes', 'flynt'),
     'parent_item_colon'     => __('Parent Item:', 'flynt'),
     'all_items'             => __('All Accommodations', 'flynt'),
     'add_new_item'          => __('Add New Accommodation', 'flynt'),
     'add_new'               => __('Add New', 'flynt'),
     'new_item'              => __('New Accommodation', 'flynt'),
     'edit_item'             => __('Edit Accommodation', 'flynt'),
     'update_item'           => __('Update Accommodation', 'flynt'),
     'view_item'             => __('View Accommodation', 'flynt'),
     'view_items'            => __('View Accommodations', 'flynt'),
     'search_items'          => __('Search Accommodations', 'flynt'),
     'not_found'             => __('Not found', 'flynt'),
     'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
     'featured_image'        => __('Featured Image', 'flynt'),
     'set_featured_image'    => __('Set featured image', 'flynt'),
     'remove_featured_image' => __('Remove featured image', 'flynt'),
     'use_featured_image'    => __('Use as featured image', 'flynt'),
     'insert_into_item'      => __('Insert into item', 'flynt'),
     'uploaded_to_this_item' => __('Uploaded to this item', 'flynt'),
     'items_list'            => __('Items list', 'flynt'),
     'items_list_navigation' => __('Items list navigation', 'flynt'),
     'filter_items_list'     => __('Filter items list', 'flynt'),
    ];
    $args = [
     'label'                 => __('Accommodation', 'flynt'),
     'description'           => __('Post Type Description', 'flynt'),
     'labels'                => $labels,
     'supports'              => ['title', 'editor', 'revisions', 'page-attributes', 'thumbnail'],
     'taxonomies'            => ['category', 'post_tag'],
     'hierarchical'          => false,
     'public'                => true,
     'show_ui'               => true,
     'show_in_menu'          => true,
     'menu_position'         => 5,
     'show_in_admin_bar'     => true,
     'show_in_nav_menus'     => true,
     'can_export'            => true,
     'has_archive'           => true,
     'exclude_from_search'   => false,
     'publicly_queryable'    => true,
     'capability_type'       => 'page',
    ];
    register_post_type('accommodations', $args);
}

add_action('init', '\\Flynt\\CustomPostTypes\\registerAccommodationsPostType');
