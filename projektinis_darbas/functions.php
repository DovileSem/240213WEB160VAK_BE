<?php
function myFirstThemeStylesAndScripts () {
    wp_enqueue_style(
        'my_style',
        get_stylesheet_uri(),
        []
    );
}

add_action('wp_enqueue_scripts', 'myFirstThemeStylesAndScripts');

function registerMyMenus() 
{
    register_nav_menus(
      [
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      ]
     );
}

add_action( 'init', 'registerMyMenus' );
   
?>