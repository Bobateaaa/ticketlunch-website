<?php
add_theme_support( 'menus' );
add_theme_support( 'title-tag' ); 

// Register navigation menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ticketlunch' ),
    'footer'  => __( 'Footer Menu', 'ticketlunch' ),
) );

// Enable theme support for customizer
add_theme_support( 'customize-selective-refresh-widgets' );

function ticketlunch_enqueue_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css', array(), '8.0.1' );
    wp_enqueue_style( 'ticketlunch-style', get_stylesheet_uri(), array('normalize'), '1.0.0' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0' );
    wp_enqueue_script( 'ticketlunch-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ticketlunch-menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ticketlunch_enqueue_scripts' );


// Handle job application form submissions
add_action( 'template_redirect', function() {
    if ( ! isset( $_POST['submit_candidature'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['candidature_nonce'] ?? '', $_POST['candidature_type'] === 'poste' ? 'candidature_poste' : 'candidature_spontanee' ) ) return;

    $nom   = sanitize_text_field( $_POST['candidature_nom'] ?? '' );
    $email = sanitize_email( $_POST['candidature_email'] ?? '' );
    $to    = get_theme_mod( 'contact_email', 'info@ticketlunch.ca' );

    if ( $_POST['candidature_type'] === 'poste' ) {
        $job_id  = intval( $_POST['job_id'] ?? 0 );
        $subject = 'Candidature : ' . get_the_title( $job_id );
    } else {
        $subject = 'Candidature spontanée de ' . $nom;
    }

    $message = "Nom : $nom\nCourriel : $email";

    $attachments = [];
    foreach ( [ 'candidature_cv', 'candidature_lettre' ] as $field ) {
        if ( ! empty( $_FILES[ $field ]['tmp_name'] ) ) {
            $attachments[] = $_FILES[ $field ]['tmp_name'];
        }
    }

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: TicketLunch <noreply@ticketlunch.ca>',
        "Reply-To: $nom <$email>"
    );

    wp_mail( $to, $subject, $message, $headers, $attachments );
} );

// Add PDF upload field to job listings
add_action( 'job_manager_job_listing_data_fields', function( $fields ) {
    $fields['_job_pdf'] = array(
        'label'       => __( 'PDF du poste', 'ticketlunch' ),
        'type'        => 'file',
        'placeholder' => '',
        'description' => __( 'Téléverser un PDF avec les détails du poste', 'ticketlunch' ),
    );
    return $fields;
} );

function ticketlunch_customize_register( $wp_customize ) {

    // -------------------------------------------------------------------------
    // GENERAL OPTIONS
    // -------------------------------------------------------------------------
    $wp_customize->add_section( 'ticketlunch_options', array(
        'title'    => __( 'TicketLunch Options', 'ticketlunch' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'site_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'site_description', array(
        'label'   => __( 'Site Description', 'ticketlunch' ),
        'section' => 'ticketlunch_options',
        'type'    => 'text',
    ) );


    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'info@ticketlunch.ca',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Courriel de contact (candidatures)', 'ticketlunch' ),
        'section' => 'ticketlunch_options',
        'type'    => 'email',
    ) );

    // -------------------------------------------------------------------------
    // HEADER SETTINGS
    // -------------------------------------------------------------------------
    $wp_customize->add_section( 'ticketlunch_header', array(
        'title'    => __( 'Header Settings', 'ticketlunch' ),
        'priority' => 31,
    ) );

    // Logo Image
    $wp_customize->add_setting( 'header_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
        'label'    => __( 'Header Logo', 'ticketlunch' ),
        'section'  => 'ticketlunch_header',
        'settings' => 'header_logo',
    ) ) );

    // Logo Title
    $wp_customize->add_setting( 'logo_title', array(
        'default'           => get_bloginfo( 'name' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'logo_title', array(
        'label'   => __( 'Logo Title', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type'    => 'text',
    ) );

    // Facebook
    $wp_customize->add_setting( 'facebook_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'facebook_url', array(
        'label'   => __( 'Facebook URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type'    => 'url',
    ) );
    $wp_customize->add_setting( 'facebook_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_icon', array(
        'label'    => __( 'Facebook Icon (optional)', 'ticketlunch' ),
        'section'  => 'ticketlunch_header',
        'settings' => 'facebook_icon',
    ) ) );

    // Twitter
    $wp_customize->add_setting( 'twitter_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'twitter_url', array(
        'label'   => __( 'Twitter URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type'    => 'url',
    ) );
    $wp_customize->add_setting( 'twitter_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_icon', array(
        'label'    => __( 'Twitter Icon (optional)', 'ticketlunch' ),
        'section'  => 'ticketlunch_header',
        'settings' => 'twitter_icon',
    ) ) );

    // Instagram
    $wp_customize->add_setting( 'instagram_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'instagram_url', array(
        'label'   => __( 'Instagram URL', 'ticketlunch' ),
        'section' => 'ticketlunch_header',
        'type'    => 'url',
    ) );
    $wp_customize->add_setting( 'instagram_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'instagram_icon', array(
        'label'    => __( 'Instagram Icon (optional)', 'ticketlunch' ),
        'section'  => 'ticketlunch_header',
        'settings' => 'instagram_icon',
    ) ) );

    // -------------------------------------------------------------------------
    // ACCUEIL 
    // -------------------------------------------------------------------------
    $wp_customize->add_section( 'ticketlunch_accueil_hero', array(
        'title'       => __( 'Accueil', 'ticketlunch' ),
        'description' => __( 'Images displayed in the hero section on the home page.', 'ticketlunch' ),
        'priority'    => 40,
    ) );

    // Hero Image 1
    $wp_customize->add_setting( 'hero_image_1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_1', array(
        'label'    => __( 'Hero Image 1', 'ticketlunch' ),
        'section'  => 'ticketlunch_accueil_hero',
        'settings' => 'hero_image_1',
    ) ) );

    // Hero Image 1 – Alt text
    $wp_customize->add_setting( 'hero_image_1_alt', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_image_1_alt', array(
        'label'   => __( 'Hero Image 1 – Alt Text', 'ticketlunch' ),
        'section' => 'ticketlunch_accueil_hero',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'badge_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'badge_icon', array(
        'label'    => __( 'Badge Icon (optional)', 'ticketlunch' ),
        'section'  => 'ticketlunch_accueil_hero',
        'settings' => 'badge_icon',
    ) ) );

    // ---- WHY SECTION IMAGES ----

// Employers image
$wp_customize->add_setting( 'why_image_employers', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'why_image_employers', array(
    'label'    => __( 'Pourquoi choisir TicketLunch? – Employeurs Image', 'ticketlunch' ),
    'section'  => 'ticketlunch_accueil_hero',
    'settings' => 'why_image_employers',
) ) );

// Employees image
$wp_customize->add_setting( 'why_image_employees', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'why_image_employees', array(
    'label'    => __( 'Pourquoi choisir TicketLunch? – Employés Image', 'ticketlunch' ),
    'section'  => 'ticketlunch_accueil_hero',
    'settings' => 'why_image_employees',
) ) );

// Restaurants image
$wp_customize->add_setting( 'why_image_restaurants', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'why_image_restaurants', array(
    'label'    => __( 'Pourquoi choisir
TicketLunch? – Restaurateurs Image', 'ticketlunch' ),
    'section'  => 'ticketlunch_accueil_hero',
    'settings' => 'why_image_restaurants',
) ) );
}
add_action( 'customize_register', 'ticketlunch_customize_register' );
?>