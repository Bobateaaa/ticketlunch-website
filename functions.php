<?php
add_theme_support( 'menus' );

// Register navigation menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ticketlunch' ),
    'footer' => __( 'Footer Menu', 'ticketlunch' ),
) );

// Enable theme support for customizer
add_theme_support( 'customize-selective-refresh-widgets' );

// Enqueue Font Awesome for social media icons
function ticketlunch_enqueue_scripts() {
    // Enqueue normalize.css first (reset styles)
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css', array(), '8.0.1' );

    // Enqueue main theme stylesheet
    wp_enqueue_style( 'ticketlunch-style', get_stylesheet_uri(), array('normalize'), '1.0.0' );

    // Enqueue Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ticketlunch_enqueue_scripts' );

// Customizer function
function ticketlunch_customize_register( $wp_customize ) {
    // Add a section for theme options
    $wp_customize->add_section( 'ticketlunch_options', array(
        'title' => __( 'TicketLunch Options', 'ticketlunch' ),
        'priority' => 30,
    ) );

    // Add setting for site description
    $wp_customize->add_setting( 'site_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Add control for site description
    $wp_customize->add_control( 'site_description', array(
        'label' => __( 'Site Description', 'ticketlunch' ),
        'section' => 'ticketlunch_options',
        'type' => 'text',
    ) );

    // Header Section
    $wp_customize->add_section( 'ticketlunch_header', array(
        'title' => __( 'Header Settings', 'ticketlunch' ),
        'priority' => 31,
    ) );

    // Logo Image Setting
    $wp_customize->add_setting( 'header_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
        'label' => __( 'Header Logo', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'settings' => 'header_logo',
    ) ) );

    // Logo Title Setting
    $wp_customize->add_setting( 'logo_title', array(
        'default' => get_bloginfo( 'name' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'logo_title', array(
        'label' => __( 'Logo Title', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type' => 'text',
    ) );

    // Facebook URL
    $wp_customize->add_setting( 'facebook_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'facebook_url', array(
        'label' => __( 'Facebook URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type' => 'url',
    ) );

    // Facebook Icon
    $wp_customize->add_setting( 'facebook_icon', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_icon', array(
        'label' => __( 'Facebook Icon (optional)', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'settings' => 'facebook_icon',
    ) ) );

    // Twitter URL
    $wp_customize->add_setting( 'twitter_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'twitter_url', array(
        'label' => __( 'Twitter URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type' => 'url',
    ) );

    // Twitter Icon
    $wp_customize->add_setting( 'twitter_icon', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_icon', array(
        'label' => __( 'Twitter Icon (optional)', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'settings' => 'twitter_icon',
    ) ) );

    // Instagram URL
    $wp_customize->add_setting( 'instagram_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'instagram_url', array(
        'label' => __( 'Instagram URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type' => 'url',
    ) );

    // Instagram Icon
    $wp_customize->add_setting( 'instagram_icon', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'instagram_icon', array(
        'label' => __( 'Instagram Icon (optional)', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'settings' => 'instagram_icon',
    ) ) );
}
add_action( 'customize_register', 'ticketlunch_customize_register' );
?>