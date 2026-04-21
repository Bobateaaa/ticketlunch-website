<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- 
    HEADER DE LA PAGE
-->
    <header class="header">
        <div class="header__logo">
            <?php if ( get_theme_mod( 'header_logo' ) ) : ?>
                <img src="<?php echo esc_url( get_theme_mod( 'header_logo' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'logo_title', get_bloginfo( 'name' ) ) ); ?>">
            <?php endif; ?>
            <p><?php echo esc_html( get_theme_mod( 'logo_title', get_bloginfo( 'name' ) ) ); ?></p>
        </div>

        <div class="header__container">
            <nav class="header__nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'primary-menu',
                ) );
                ?>
            </nav>

            <div class="header__lang">
                <button>FR</button> 
                <span>/</span>
                <button>EN</button>
            </div>

            <div class="header__media">
                <a href="<?php echo esc_url( get_theme_mod( 'facebook_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">
                    <?php if ( get_theme_mod( 'facebook_icon' ) ) : ?>
                        <img src="<?php echo esc_url( get_theme_mod( 'facebook_icon' ) ); ?>" alt="Facebook" class="social-icon">
                    <?php else: ?>
                        <i class="fab fa-facebook-f"></i>
                    <?php endif; ?>
                </a>
                <a href="<?php echo esc_url( get_theme_mod( 'twitter_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">
                    <?php if ( get_theme_mod( 'twitter_icon' ) ) : ?>
                        <img src="<?php echo esc_url( get_theme_mod( 'twitter_icon' ) ); ?>" alt="Twitter" class="social-icon">
                    <?php else: ?>
                        <i class="fab fa-twitter"></i>
                    <?php endif; ?>
                </a>
                <a href="<?php echo esc_url( get_theme_mod( 'instagram_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">
                    <?php if ( get_theme_mod( 'instagram_icon' ) ) : ?>
                        <img src="<?php echo esc_url( get_theme_mod( 'instagram_icon' ) ); ?>" alt="Instagram" class="social-icon">
                    <?php else: ?>
                        <i class="fab fa-instagram"></i>
                    <?php endif; ?>
                </a>
            </div>

        </div>
    </header>