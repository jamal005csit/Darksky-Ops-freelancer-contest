<?php
/**
 * Darksky Ops — Theme Functions
 *
 * Lean, deliberate. Only what is required.
 * No plugin dependencies. No page builder hooks.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ─────────────────────────────────────────────
// THEME SETUP
// ─────────────────────────────────────────────
function darksky_setup() {
    // Enable title-tag
    add_theme_support( 'title-tag' );

    // Enable featured images
    add_theme_support( 'post-thumbnails' );

    // HTML5 output
    add_theme_support( 'html5', array(
        'comment-list', 'comment-form', 'search-form',
        'gallery', 'caption', 'style', 'script',
    ) );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Disable wp-emoji (performance)
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'after_setup_theme', 'darksky_setup' );


// ─────────────────────────────────────────────
// ENQUEUE STYLES + SCRIPTS
// ─────────────────────────────────────────────
function darksky_enqueue_assets() {

    // Google Fonts — Syne + DM Mono
    wp_enqueue_style(
        'darksky-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Mono:wght@300;400&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'darksky-style',
        get_stylesheet_uri(),
        array( 'darksky-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // Minimal inline JS (cursor + scroll + reveal)
    wp_add_inline_script( 'jquery', '' ); // ensure footer loaded
    wp_enqueue_script(
        'darksky-main',
        get_template_directory_uri() . '/assets/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true // footer
    );
}
add_action( 'wp_enqueue_scripts', 'darksky_enqueue_assets' );


// ─────────────────────────────────────────────
// REMOVE UNNECESSARY HEAD BLOAT
// ─────────────────────────────────────────────
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Remove classic themes REST output
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'REST API restricted.', array( 'status' => 401 ) );
    }
    return $result;
});


// ─────────────────────────────────────────────
// CUSTOMIZER: CONTACT EMAIL
// ─────────────────────────────────────────────
function darksky_customizer( $wp_customize ) {

    $wp_customize->add_section( 'darksky_contact_section', array(
        'title'    => __( 'Contact Settings', 'darksky-ops' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'darksky_contact_email', array(
        'default'           => 'contact@darkskyops.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'darksky_contact_email', array(
        'label'   => __( 'Contact Email', 'darksky-ops' ),
        'section' => 'darksky_contact_section',
        'type'    => 'email',
    ) );
}
add_action( 'customize_register', 'darksky_customizer' );


// ─────────────────────────────────────────────
// SECURITY: HARDENING HEADERS
// ─────────────────────────────────────────────
function darksky_security_headers() {
    if ( ! is_admin() ) {
        header( 'X-Content-Type-Options: nosniff' );
        header( 'X-Frame-Options: SAMEORIGIN' );
        header( 'X-XSS-Protection: 1; mode=block' );
        header( 'Referrer-Policy: strict-origin-when-cross-origin' );
        header( "Permissions-Policy: geolocation=(), microphone=(), camera=()" );
    }
}
add_action( 'send_headers', 'darksky_security_headers' );


// ─────────────────────────────────────────────
// PERFORMANCE: DISABLE XMLRPC
// ─────────────────────────────────────────────
add_filter( 'xmlrpc_enabled', '__return_false' );


// ─────────────────────────────────────────────
// DISABLE COMMENTS SITE-WIDE
// ─────────────────────────────────────────────
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open',    '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 10, 2 );


// ─────────────────────────────────────────────
// BODY CLASSES
// ─────────────────────────────────────────────
function darksky_body_classes( $classes ) {
    $classes[] = 'darksky-theme';
    return $classes;
}
add_filter( 'body_class', 'darksky_body_classes' );
