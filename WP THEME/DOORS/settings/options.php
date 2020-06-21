<?php

function new_customizer_settings($wp_customize)
{
    // add a setting for the site logo
    $wp_customize->add_setting('theme_logo', array(
        'type'       => 'option'
    ));
    $wp_customize->add_setting('header_phone', array(
        'type'       => 'option'
    ));
    $wp_customize->add_setting('enable_account', array(
        'type'       => 'option',
        'default' => true
    ));
    $wp_customize->add_setting('enable_cart', array(
        'type'       => 'option',
        'default' => true
    ));

    $wp_customize->add_setting('categories_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('categories_desc', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('vendors_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('vendors_desc', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('vendors_btn_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('vendors_btn_href', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('useful_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('useful_desc', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('whyus_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('whyus_desc', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('whyus_image', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('emailsubs_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_setting('emailsubs_btn_title', array(
        'type'       => 'option'
    ));

    $wp_customize->add_section('theme_header', array(
        'title' => 'Header',
        'description' => '',
        'priority' => 120,
    ));

    $wp_customize->add_panel('theme_sections', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Sections',
        'description'    => '',
    ));

    $wp_customize->add_section('theme_sections_categories', array(
        'title' => 'Categories',
        'description' => '',
        'priority' => 120,
        'panel' => 'theme_sections'
    ));

    $wp_customize->add_section('theme_sections_vendors', array(
        'title' => 'Vendors',
        'description' => '',
        'priority' => 120,
        'panel' => 'theme_sections'
    ));

    $wp_customize->add_section('theme_sections_useful', array(
        'title' => 'Useful',
        'description' => '',
        'priority' => 120,
        'panel' => 'theme_sections'
    ));

    $wp_customize->add_section('theme_sections_whyus', array(
        'title' => 'Why Us',
        'description' => '',
        'priority' => 120,
        'panel' => 'theme_sections'
    ));

    $wp_customize->add_section('theme_sections_email', array(
        'title' => 'Email Subscribtion section',
        'description' => '',
        'priority' => 120,
        'panel' => 'theme_sections'
    ));

    // Add a control to upload the logo
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'theme_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'title_tagline',
            'settings' => 'theme_logo',
        )
    ));

    // Add a control to upload the logo
    $wp_customize->add_control('header_phone', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_header', // Required, core or custom.
        'label' => __('Phone'),
        'description' => __('Phone number on header'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __('+ 1 (111) 111-11-11'),
        )
    ]);

    $wp_customize->add_control('enable_account', [
        'type' => 'checkbox',
        'priority' => 10, // Within the section.
        'section' => 'theme_header', // Required, core or custom.
        'label' => __('Enable account button'),
        'description' => __('Enable account button on header'),
        'input_attrs' => array(),
    ]);

    $wp_customize->add_control('enable_cart', [
        'type' => 'checkbox',
        'priority' => 10, // Within the section.
        'section' => 'theme_header', // Required, core or custom.
        'label' => __('Enable cart button'),
        'description' => __('Enable cart button on header'),
        'input_attrs' => array(),
    ]);

    $wp_customize->add_control('enable_cart', [
        'type' => 'checkbox',
        'priority' => 10, // Within the section.
        'section' => 'theme_header', // Required, core or custom.
        'label' => __('Enable cart button'),
        'description' => __('Enable cart button on header'),
        'input_attrs' => array(),
    ]);

    $wp_customize->add_control('categories_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_categories', // Required, core or custom.
        'label' => __('Categories Title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('categories_desc', [
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_categories', // Required, core or custom.
        'label' => __('Categories Description'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('vendors_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_vendors', // Required, core or custom.
        'label' => __('Vendors title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('vendors_desc', [
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_vendors', // Required, core or custom.
        'label' => __('Categories Description'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('vendors_btn_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_vendors', // Required, core or custom.
        'label' => __('Vendors button title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('vendors_btn_href', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_vendors', // Required, core or custom.
        'label' => __('Vendors button link'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('useful_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_useful', // Required, core or custom.
        'label' => __('Useful Title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('useful_desc', [
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_useful', // Required, core or custom.
        'label' => __('Useful Description'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('whyus_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_whyus', // Required, core or custom.
        'label' => __('Useful Title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control('whyus_desc', [
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_whyus', // Required, core or custom.
        'label' => __('Useful Description'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'whyus_image',
        array(
            'label' => 'Upload Image to Why Us Section',
            'section' => 'theme_sections_whyus',
            'settings' => 'whyus_image',
        )
    ));

    $wp_customize->add_control(new Text_Editor_Custom_Control($wp_customize, 'emailsubs_title', array(
        'label' => __('E-mail section title'),
        'section' => 'theme_sections_email',
        'description' => __('Here you can add a title for your content'),
        'priority' => 10,
    )));

    $wp_customize->add_control('emailsubs_btn_title', [
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'theme_sections_email', // Required, core or custom.
        'label' => __('E-mail subscribtion section button Title'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __(''),
        )
    ]);
}
add_action('customize_register', 'new_customizer_settings');
