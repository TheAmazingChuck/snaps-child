<?php

add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

function my_enqueue_styles() {

    /* If using a child theme, auto-load the parent theme style. */
    if ( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }

    /* Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function register_my_menu() {
  register_nav_menu('menu-custom',__( 'Menu custom' ));
}

add_action( 'init', 'register_my_menu' );

add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
$post = get_post( $post_id );
$open = false;
return $open;
}