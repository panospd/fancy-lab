<?php

/** 
 * 
 * Fancy Lab Theme Customizer
 * 
 * @packge Fancy Lab
 * 
 */

 function fancy_lab_customizer($wp_customize) {
    // Copyriught Section
    $wp_customize->add_section( 'sec_copyright' , array(
        'title'      => 'Copyright Settings',
        'description' => 'Copyright Section'
    ));

    // Field 1 - Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description' => 'Please, add your copyright information here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // -----------------------------------------------------
    // Slider Section
    $wp_customize->add_section( 'sec_slider' , array(
        'title'      => 'Slider Settings',
        'description' => 'Slider Section'
    ));

    // Field 1 - Slider Page Number 1
    $wp_customize->add_setting(
        'set_slider_page1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page1', array(
            'label' => 'Set slider page 1',
            'description' => 'Set slider page 1',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 2 - Slider Button Text Number 1
    $wp_customize->add_setting(
        'set_slider_button_text1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text1', array(
            'label' => 'Button text for page 1',
            'description' => 'button text for page 1',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 3 - Slider Button Url Number 1
    $wp_customize->add_setting(
        'set_slider_button_url1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url1', array(
            'label' => 'Button url for page 1',
            'description' => 'Button url for page 1',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    // ------------ Page 2 -------------- //

    // Field 1 - Slider Page Number 2
    $wp_customize->add_setting(
        'set_slider_page2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page2', array(
            'label' => 'Set slider page 2',
            'description' => 'Set slider page 2',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 2 - Slider Button Text Number 2
    $wp_customize->add_setting(
        'set_slider_button_text2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text2', array(
            'label' => 'Button text for page 2',
            'description' => 'button text for page 2',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 3 - Slider Button Url Number 2
    $wp_customize->add_setting(
        'set_slider_button_url2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url2', array(
            'label' => 'Button url for page 2',
            'description' => 'Button url for page 2',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    // ------------ Page 3 -------------- //

    // Field 1 - Slider Page Number 3
    $wp_customize->add_setting(
        'set_slider_page3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page3', array(
            'label' => 'Set slider page 3',
            'description' => 'Set slider page 3',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 2 - Slider Button Text Number 3
    $wp_customize->add_setting(
        'set_slider_button_text3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text3', array(
            'label' => 'Button text for page 3',
            'description' => 'button text for page 3',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 3 - Slider Button Url Number 3
    $wp_customize->add_setting(
        'set_slider_button_url3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url3', array(
            'label' => 'Button url for page 3',
            'description' => 'Button url for page 3',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );
 }

 add_action('customize_register', 'fancy_lab_customizer');