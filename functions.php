<?php 

function addThemeSupport(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'addThemeSupport');


function loadMenus(){
        $locations = array(
            'primary' => "Desktop Primary menu",
            'footer' => "Footer Menu"
        );
        register_nav_menus($locations);
}
add_action('init', 'loadMenus');




function loadScripts(){
    wp_enqueue_script('main_js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Gothic+A1:300,600|Playfair+Display');
    wp_enqueue_script('font_awesome', '//kit.fontawesome.com/4159acce11.js');
    wp_enqueue_style('stylesheet_main', get_stylesheet_uri());


}
 
add_action('wp_enqueue_scripts', 'loadScripts');



?>