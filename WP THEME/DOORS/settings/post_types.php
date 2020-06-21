<?php

add_action('init', 'register_post_types');
function register_post_types()
{

    #region Register "Categories" Post Type
    register_post_type('post_categories', [
        'label'  => null,
        'labels' => [
            'name'               => 'Категории', // основное название для типа записи
            'singular_name'      => 'Категория', // название для одной записи этого типа
            'add_new'            => 'Добавить категорию', // для добавления новой записи
            'add_new_item'       => 'Добавление категории', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование категории', // для редактирования типа записи
            'new_item'           => 'Новая категория', // текст новой записи
            'view_item'          => 'Смотреть категорию', // для просмотра записи этого типа.
            'search_items'       => 'Искать категорию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Категории', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => "cats", // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    #endregion

    #region Register "Categories" Post Type
    register_post_type('post_vendors', [
        'label'  => null,
        'labels' => [
            'name'               => 'Каталог производителей', // основное название для типа записи
            'singular_name'      => 'Производителя', // название для одной записи этого типа
            'add_new'            => 'Добавить производителя', // для добавления новой записи
            'add_new_item'       => 'Добавление производителя', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование производителя', // для редактирования типа записи
            'new_item'           => 'Новая производитель', // текст новой записи
            'view_item'          => 'Смотреть производителя', // для просмотра записи этого типа.
            'search_items'       => 'Искать производителя', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Производители', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => "vendors", // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    #endregion

    #region Register "Useful" Post Type
    register_post_type('post_useful', [
        'label'  => null,
        'labels' => [
            'name'               => 'Полезное', // основное название для типа записи
            'singular_name'      => 'Полезное', // название для одной записи этого типа
            'add_new'            => 'Добавить "Полезное"', // для добавления новой записи
            'add_new_item'       => 'Добавление "Полезное"', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование "Полезное"', // для редактирования типа записи
            'new_item'           => 'Новое "Полезное"', // текст новой записи
            'view_item'          => 'Смотреть "Полезное"', // для просмотра записи этого типа.
            'search_items'       => 'Искать "Полезное"', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Полезное', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => "useful", // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    #endregion

    #region Register "Why Us" Post Type
    register_post_type('post_whyus', [
        'label'  => null,
        'labels' => [
            'name'               => 'Преимущества', // основное название для типа записи
            'singular_name'      => 'Преимущества', // название для одной записи этого типа
            'add_new'            => 'Добавить преимущество', // для добавления новой записи
            'add_new_item'       => 'Добавление преимущества', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование преимущества', // для редактирования типа записи
            'new_item'           => 'Новое преимущество', // текст новой записи
            'view_item'          => 'Смотреть преимущество', // для просмотра записи этого типа.
            'search_items'       => 'Искать преимущество', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Преимущества', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => "whyus", // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    #endregion
}