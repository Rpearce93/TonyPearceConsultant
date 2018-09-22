<?php

/**
 * Tell woocommerce, we support you!
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
 * Hide wordpress version number
 */
function wpb_remove_version() {
return '';
}
add_filter('the_generator', 'wpb_remove_version');

/**
 * Hide login error messages
 */
function no_wordpress_errors(){
return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );


/**
 * Remove welcome panel
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Remove default option to link to image when adding to content
 */
function remove_image_link() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'remove_image_link', 10);

/**
 * Disable xmlrpc, for security
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove “Category:”, “Tag:”, “Author:” from Archive title
 */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

if ( ! function_exists( 'designamite_setup' ) ) :

  function designamite_setup() {

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'designamite' ),
    ) );

    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

  }
endif;
add_action( 'after_setup_theme', 'designamite_setup' );

function designamite_scripts() {

  wp_enqueue_style( 'designamite-style', get_template_directory_uri() . '/main.css' );

  wp_enqueue_script( 'designamite-js', get_template_directory_uri() . '/js/dist/main.js', array('jquery'), '1.0.0', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action( 'wp_enqueue_scripts', 'designamite_scripts' );