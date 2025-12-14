<?php add_theme_support('post-thumbnails') ?>
<?php
function mytheme_register_nav_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'mytheme'),
            'footer-menu' => __('Footer Menu', 'mytheme')
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_nav_menus');
?>