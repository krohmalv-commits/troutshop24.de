<?php

if (!defined('ABSPATH')) {
    exit;
}

function hallo_troutshop_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'hallo-troutshop'),
        'footer' => __('Footer Menu', 'hallo-troutshop'),
    ]);
}
add_action('after_setup_theme', 'hallo_troutshop_setup');

function hallo_troutshop_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('hallo-troutshop-style', get_stylesheet_uri(), [], $theme_version);

    $site_css_relative = '/assets/css/site.css';
    $site_css_path = get_theme_file_path($site_css_relative);

    if (file_exists($site_css_path)) {
        wp_enqueue_style(
            'hallo-troutshop-site-css',
            get_theme_file_uri($site_css_relative),
            ['hallo-troutshop-style'],
            (string) filemtime($site_css_path)
        );
    }

    $site_js_relative = '/assets/js/site.js';
    $site_js_path = get_theme_file_path($site_js_relative);

    if (file_exists($site_js_path)) {
        wp_enqueue_script(
            'hallo-troutshop-site-js',
            get_theme_file_uri($site_js_relative),
            [],
            (string) filemtime($site_js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'hallo_troutshop_assets');
