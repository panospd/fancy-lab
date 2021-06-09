<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/customizer.php';

function fancy_lab_scripts() {
    wp_enqueue_script('boostrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('fancy-lab-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Seaweed+Script&display=swap');

    // Flexslider Javascript and css files
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), '', true);
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all');
}

add_action('wp_enqueue_scripts', 'fancy_lab_scripts');

function fancy_lab_config() {
    register_nav_menus(
        array(
            'fancy_lab_main_menu' => 'Fancy Lab Main Menu',
            'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu'
        )
    );

    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 1
        )
    ));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('custom-logo', array(
        'height' => 85,
        'width' => 160,
        'flex_height' => true,
        'flex_width' => true
    ));

    add_theme_support('post-thumbnails');

    add_image_size('fancy-lab-blog', 960, 640, array('center', 'center'));
    add_image_size('fancy-lab-slider', 1920, 800, array('center', 'center'));

    if(! isset($content_width)) {
        $content_width = 600;
    }

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fancy_lab_config', 0);

if(class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}