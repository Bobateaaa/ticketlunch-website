<?php
/**
 * Template Name: Reconnaissance
 * Template Post Type: page
 */
get_header(); ?>

<main id="reconnaissance">

    <!-- TITRE -->
    <section class="reconnaissance-title title">
        <div class="reconnaissance-title__content title__content">
            <p class="reconnaissance-title__label title__label">L'organisation</p>
            <h2 class="reconnaissance-title__heading title__heading">Reconnaissance</h2>
        </div>
        <div class="reconnaissance-title__mascot title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- RECONNAISSANCES -->
    <section class="reconnaissances">

        <!-- Finaliste au concours Défi Ose Entreprendre -->
        <article class="reconnaissances__card">
            <div class="reconnaissances__card-content">
                <h3 class="reconnaissances__card-title">Finaliste au concours Défi Ose Entreprendre</h3>
                <p class="reconnaissances__card-text"><?php echo wp_kses_post( get_theme_mod( 'reconnaissance_defi_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' ) ); ?></p>
            </div>
            <div class="reconnaissances__card-image">
                <img
                    src="<?php echo esc_url( get_theme_mod( 'reconnaissance_defi_image', '' ) ); ?>"
                    alt="<?php echo esc_attr( get_theme_mod( 'reconnaissance_defi_image_alt', 'Certificat Défi Ose Entreprendre – TicketLunch' ) ); ?>"
                >
            </div>
        </article>

        <!-- La Ruche, campagne de sociofinancement -->
        <article class="reconnaissances__card">
            <div class="reconnaissances__card-image">
                <img
                    src="<?php echo esc_url( get_theme_mod( 'reconnaissance_ruche_image', '' ) ); ?>"
                    alt="<?php echo esc_attr( get_theme_mod( 'reconnaissance_ruche_image_alt', 'La Ruche – campagne de sociofinancement à 110 %' ) ); ?>"
                >
            </div>
            <div class="reconnaissances__card-content">
                <h3 class="reconnaissances__card-title">La Ruche, campagne de sociofinancement à 110%</h3>
                <p class="reconnaissances__card-text"><?php echo wp_kses_post( get_theme_mod( 'reconnaissance_ruche_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' ) ); ?></p>
            </div>
        </article>

    </section>

</main>

<?php get_footer(); ?>