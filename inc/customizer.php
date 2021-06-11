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
        'title'      => __('Copyright Settings', 'fancy-lab'),
        'description' => __('Copyright Section', 'fancy-lab')
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
            'label' => __('Copyright', 'fancy-lab'),
            'description' => __('Please, add your copyright information here', 'fancy-lab'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // -----------------------------------------------------
    // Slider Section
    $wp_customize->add_section( 'sec_slider' , array(
        'title'      => __('Slider Settings'. 'fancy-lab'),
        'description' => __('Slider Section', 'fancy-lab')
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
            'label' => __('Set slider page 1', 'fancy-lab'),
            'description' => __('Set slider page 1', 'fancy-lab'),
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
            'label' => __('Button text for page 1', 'fancy-lab'),
            'description' => __('Button text for page 1', 'fancy-lab'),
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
            'label' => __('Button url for page 1', 'fancy-lab'),
            'description' => __('Button url for page 1', 'fancy-lab'),
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
            'label' => __('Set slider page 2', 'fancy-lab'),
            'description' => __('Set slider page 2', 'fancy-lab'),
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
            'label' => __('Button text for page 2', 'fancy-lab'),
            'description' => __('button text for page 2', 'fancy-lab'),
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
            'label' => __('Button url for page 2', 'fancy-lab'),
            'description' => __('Button url for page 2', 'fancy-lab'),
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
            'label' => __('Set slider page 3', 'fancy-lab'),
            'description' => __('Set slider page 3', 'fancy-lab'),
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
            'label' => __('Button text for page 3', 'fancy-lab'),
            'description' => __('button text for page 3', 'fancy-lab'),
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
            'label' => __('Button url for page 3', 'fancy-lab'),
            'description' => __('Button url for page 3', 'fancy-lab'),
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    // Home Page Settings
    $wp_customize->add_section( 
        'sec_home_page' , array(
        'title'      => __('Home Page Products and Blog Settings', 'fancy-lab'),
        'description' => __('Home Page Section', 'fancy-lab')
    ));

    // Popular Products products title
    $wp_customize->add_setting(
        'set_popular_title', array(
            'type' => 'theme_mod',
            'default' => __('Popular Products', 'fancy-lab'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_popular_title', array(
            'label' => __('Set Popular Products Title', 'fancy-lab'),
            'description' => __('Set Polular Products Title', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );

    // Popular Products limit
    $wp_customize->add_setting(
        'set_popular_max_num', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_num', array(
            'label' => __('Set Popular Products Max Number', 'fancy-lab'),
            'description' => __('Set Polular Products Max Number', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );
    // Popular Products columns
    $wp_customize->add_setting(
        'set_popular_max_col', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_col', array(
            'label' => __('Set Popular Products Max Columns', 'fancy-lab'),
            'description' => __('Set Polular Products Max Columns', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // ----------

    // New Arrivals title
    $wp_customize->add_setting(
        'set_new_arrivals_title', array(
            'type' => 'theme_mod',
            'default' => __('New Arrivals', 'fancy-lab'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_new_arrivals_title', array(
            'label' => __('Set New Arrivals Title', 'fancy-lab'),
            'description' => __('Set New Arrivals Title', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );

    // New Arrivals limit
    $wp_customize->add_setting(
        'set_new_arrivals_max_num', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_arrivals_max_num', array(
            'label' => __('Set New Arrivals Max Number', 'fancy-lab'),
            'description' => __('Set New Arrivals Max Number', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );
    // New Arrivals columns
    $wp_customize->add_setting(
        'set_new_arrivals_max_col', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_arrivals_max_col', array(
            'label' => __('Set New Arrivals Max Columns', 'fancy-lab'),
            'description' => __('Set New Arrivals Max Columns', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // ----------

    // Deal of the Week Checkbox
    $wp_customize->add_setting(
        'set_deal_show', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'fancy_lab_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        'set_deal_show', array(
            'label' => __('Show Deal of the Week?', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'checkbox'
        )
    );

     // Deal of the Week Title
     $wp_customize->add_setting(
        'set_deal_title', array(
            'type' => 'theme_mod',
            'default' => __('Deal of The Week', 'fancy-lab'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_deal_title', array(
            'label' => __('Deal of the Week Title', 'fancy-lab'),
            'description' => __('Title to display', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );

    // Deal of the Week Product ID
    $wp_customize->add_setting(
        'set_deal', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_deal', array(
            'label' => __('Deal of the Week Product ID', 'fancy-lab'),
            'description' => __('Product ID to Display', 'fancy-lab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );
 }

 add_action('customize_register', 'fancy_lab_customizer');

 function fancy_lab_sanitize_checkbox($checked) {
    return isset($checked) && $checked == true ? true : false;
 }
