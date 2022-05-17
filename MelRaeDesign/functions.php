<?php

function melrae_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','melrae_theme_support');

function melrae_menus(){

        $locations = array(
        'primary' => "Main Top Nav Bar"
        );
        
        register_nav_menus($locations);
}

add_action('init','melrae_menus');

function custom_comment_reply_link($content) {
        $extra_classes = 'button small reply';
        return preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $extra_classes, $content);
    }
    
    add_filter('comment_reply_link', 'custom_comment_reply_link', 99);



function melrae_load_stylesheets(){
                                        
        $version = wp_get_theme() -> get('Version');
        wp_register_style('noscript', get_template_directory_uri() . '/assets/css/noscript.css', array(), 1.0, 'all');
        wp_enqueue_style('noscript');

        wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), 1.0, 'all');
        wp_enqueue_style('fontawesome');

        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
        wp_enqueue_style('main');

        wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1.0, 'all');
        wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts', 'melrae_load_stylesheets'); 



//load script

function melrae_addjs()
{
wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, 1, 1);
wp_enqueue_script('jquery');

wp_register_script('scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), 1, 1, 1);
wp_enqueue_script('scrollex');

wp_register_script('scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), 1, 1, 1);
wp_enqueue_script('scrolly');

wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 1, 1, 1);
wp_enqueue_script('browser');

wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 1, 1, 1);
wp_enqueue_script('breakpoints');

wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), 1, 1, 1);
wp_enqueue_script('util');

wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
wp_enqueue_script('main');

wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts', 'melrae_addjs'); 




?>