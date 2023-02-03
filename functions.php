<?php 
    function ajouter_styles() {
        wp_enqueue_style(   'style-principale', 
                            get_template_directory_uri() . '/style.css',
                            array(),
                            filemtime(get_template_directory() . '/style.css')
        );
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles', 0 );

// Enregistrement des menus
    if ( ! function_exists( 'enregistrement_nav_menu' ) ) {

        function enregistrement_nav_menu(){
            register_nav_menus( array(
                'principal' => 'Menu Principal',
                'footer'  => 'Menu pied de page',
            ) );
        }
        add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
    }
