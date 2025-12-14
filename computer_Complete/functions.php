<?php 
    add_theme_support('post-thumbnails');

    function my_custom_theme_setup() {
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'computer' ),
            'footer'  => __( 'Footer Menu', 'computer' ),
        ) );
    }
    add_action( 'after_setup_theme', 'my_custom_theme_setup' );
?>

