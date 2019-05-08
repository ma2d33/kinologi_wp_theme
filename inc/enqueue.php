<?php

        /*
        @package kinotheme

        ========================
            ADMIN ENQUEUE FUNCTIONS
        ========================         
    */

    function kinologi_admin_enqueue($hook){
        if($hook == 'toplevel_page_kinologi_admin_slug' || 'kinilogi_page_kinologi_custom_css_slug'){
        // style
        wp_register_style( 'kinologi_admin', get_template_directory_uri() . '/css/kinologi.admin.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'kinologi_admin');

        wp_enqueue_media();

        wp_register_script( 'kinologi-admin-script', get_template_directory_uri() . '/js/kinologi.admin.js' , array(), '1.0.0', $in_footer = true );
        wp_enqueue_script( 'kinologi-admin-script');
         }
         else{
            return;
         }
    }


    function kino_escript_enqueue(){
        
        wp_enqueue_style( 'customstyle', get_template_directory_uri().'/css/custom.css', array(),'1.0.0','all');
        wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.3.1','all');
        wp_enqueue_style('bootstrap');
        // script
        wp_enqueue_script('customscript', get_template_directory_uri().'/js/custom.js', array(), '1.0.0', true);
        wp_register_script('bottstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.3.1',true);
        wp_enqueue_script('bootstrap_js');
    }

    add_action( 'admin_enqueue_scripts', 'kinologi_admin_enqueue');

    add_action('wp_enqueue_scripts', 'kino_escript_enqueue');