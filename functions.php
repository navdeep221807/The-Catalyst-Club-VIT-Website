<?php

// Theme Setup
function tcc_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tcc'),
    ));
}
add_action('after_setup_theme', 'tcc_theme_setup');

// Custom Menu Walker for Tailwind classes
class TCC_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<a class="hover:text-pink-600 transition" href="' . $item->url . '">' . $item->title . '</a>';
    }
}

// Customizer Settings
function tcc_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('tcc_hero_section', array(
        'title' => __('Hero Section', 'tcc'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Inspiring Change Through Innovation and Collaboration',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'tcc'),
        'section' => 'tcc_hero_section',
        'type' => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'The Catalyst Club is an independent, student-driven organization dedicated to empowering young leaders and innovators.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'tcc'),
        'section' => 'tcc_hero_section',
        'type' => 'textarea',
    ));

    // CTA Button Text
    $wp_customize->add_setting('cta_button_text', array(
        'default' => 'ABOUT US',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cta_button_text', array(
        'label' => __('CTA Button Text', 'tcc'),
        'section' => 'tcc_hero_section',
        'type' => 'text',
    ));

    // CTA Button URL
    $wp_customize->add_setting('cta_button_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('cta_button_url', array(
        'label' => __('CTA Button URL', 'tcc'),
        'section' => 'tcc_hero_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'tcc_customize_register');

// Enqueue scripts and styles
function tcc_scripts() {
    wp_enqueue_style('tcc-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tcc_scripts'); 