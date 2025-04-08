<?php
/**
 * Functions file for Brands Theme
 * 
 * This file contains the theme setup, custom post type registration,
 * and script/style enqueueing for the "Brands" custom post type.
 * 
 * @package WordPress
 * @subpackage BrandsTheme
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('mn_brands_theme_enqueue_scripts')) {
    /**
     * Enqueue scripts and styles
     * 
     * This function enqueues the necessary CSS and JS files for the theme.
     * It includes Swiper for the slider functionality and a custom main stylesheet and script.
     * 
     * @since 1.0.0
     * @return void
     */
    function mn_brands_theme_enqueue_scripts() {
        // Adobe Fonts (Typekit)
        wp_enqueue_style(
            'typekit-fonts',
            'https://use.typekit.net/vgl3ppw.css',
            array(),
            null
        );
        
        wp_enqueue_style(
            'bootstrap-icons', 
            'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css',
            array(),
            '1.10.5'
        );

        // Enqueue Swiper CSS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
            array(),
            '10.0.0'
        );

        // Enqueue main stylesheet
        wp_enqueue_style(
            'main-style',
            get_stylesheet_directory_uri() . '/assets/css/main.css',
            array(),
            '1.0'
        );

        // Enqueue Swiper JS
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
            array(),
            '10.0.0',
            true
        );

        // Enqueue main JS
        wp_enqueue_script(
            'main-js',
            get_stylesheet_directory_uri() . '/assets/js/main.js',
            array('swiper-js'),
            '1.0',
            true
        );
    }
    add_action('wp_enqueue_scripts', 'mn_brands_theme_enqueue_scripts');
}

if (!function_exists('mn_brands_register_post_type')) {
    /**
     * Register Custom Post Type: Brands
     * 
     * This function registers a custom post type called "Brands" with various settings.
     * It includes support for title, editor, and thumbnail features.
     * 
     * @since 1.0.0
     * @return void
     */
    function mn_brands_register_post_type() {

        $labels = array(
            'name'                  => _x('Brands', 'Post type general name', 'mn-brands'),
            'singular_name'         => _x('Brand', 'Post type singular name', 'mn-brands'),
            'menu_name'             => _x('Brands', 'Admin Menu text', 'mn-brands'),
            'name_admin_bar'        => _x('Brand', 'Add New on Toolbar', 'mn-brands'),
            'add_new'               => __('Add New', 'mn-brands'),
            'add_new_item'          => __('Add New Brand', 'mn-brands'),
            'new_item'              => __('New Brand', 'mn-brands'),
            'edit_item'             => __('Edit Brand', 'mn-brands'),
            'view_item'             => __('View Brand', 'mn-brands'),
            'all_items'             => __('All Brands', 'mn-brands'),
            'search_items'          => __('Search Brands', 'mn-brands'),
            'parent_item_colon'     => __('Parent Brands:', 'mn-brands'),
            'not_found'             => __('No brands found.', 'mn-brands'),
            'not_found_in_trash'    => __('No brands found in Trash.', 'mn-brands'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'menu_position'      => 20, // below Pages
            'menu_icon'          => 'dashicons-star-filled',
            'supports'           => array('thumbnail'), 
            'rewrite'            => array('slug' => 'brands'),
            'show_in_rest'       => true, // Gutenberg support
        );

        register_post_type( 'brands', $args );
    }
    add_action( 'init', 'mn_brands_register_post_type' );
}

if (!function_exists('mn_brands_theme_setup')) {
    /**
     * Add custom logo support via Customizer
     *
     * @since 1.0.0
     * @return void
     */
    function mn_brands_theme_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }
    add_action('after_setup_theme', 'mn_brands_theme_setup');
}
