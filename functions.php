<?php

if ( function_exists('register_sidebar')) {
	register_sidebar( array(
		'name'          => 'Sidebar Widgets',
		'id'            => 'sidebar-widgets',
		'description'   => 'Widgets for sidebar',
		'before_widget' => '<div class="sidebar-wrap"><div class="sidebar-back"></div><div class="sidebar-forward">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>'
	));
}

function post_type_taxonomy()  {

    $post_type = array(
        'name'                       => 'Типы постов', 
        'singular_name'              => 'Тип поста',
        'menu_name'                  => 'Типы постов',
        'all_items'                  => 'Все типы постов',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'new_item_name'              => 'Новый типа поста',
        'add_new_item'               => 'Добавить тип поста',
        'edit_item'                  => 'Редактировать тип поста', 
        'update_item'                => 'Обновить тип поста', 
        'separate_items_with_commas' => null,
        'search_items'               => 'Искать в типах поста',
        'add_or_remove_items'        => null, 
        'choose_from_most_used'      => null
    );
    $post_type = array(
        'labels'                     => $post_type,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,

    );
    register_taxonomy( 'post_type', array('post'), $post_typeArgs );
}