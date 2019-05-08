<?php


    require get_template_directory() .'/inc/function-admin.php';
    require get_template_directory() .'/inc/enqueue.php';
        

    function kino_theme_support(){
        add_theme_support( 'menus' );
        register_nav_menu( 'primary', 'top header navigation' );
        register_nav_menu( 'secondary', 'footer navigation' );

    }
    add_action('init','kino_theme_support');