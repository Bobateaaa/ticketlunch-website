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

        <!-- La Ruche et le concours Défi OSEntreprendre -->
        <article class="reconnaissances__card">
            <div class="reconnaissances__card-content">
                <h3 class="reconnaissances__card-title">Défi osentreprendre</h3>
                <p class="reconnaissances__card-text"><?php echo wp_kses_post( get_theme_mod( 'reconnaissance_defi_text', 'Finaliste au concours Défi OSEntreprendre, TicketLunch a aussi mobilisé sa communauté sur La Ruche. Grâce à l’appui de ses contributeurs, sa campagne de sociofinancement a dépassé son objectif et atteint 110 %.' ) ); ?></p>
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
            <div class="reconnaissances__card-content">
                <h3 class="reconnaissances__card-title">La Ruche, campagne de sociofinancement à 110 %</h3>
                <p class="reconnaissances__card-text"><?php echo wp_kses_post( get_theme_mod( 'reconnaissance_ruche_text', 'Cette campagne a permis de faire connaître notre projet et de rassembler des personnes qui croient en notre mission. Merci à toutes celles et ceux qui ont contribué et partagé la campagne.' ) ); ?></p>
            </div>
            <div class="reconnaissances__card-image">
                <img
                    src="<?php echo esc_url( get_theme_mod( 'reconnaissance_ruche_image', '' ) ); ?>"
                    alt="<?php echo esc_attr( get_theme_mod( 'reconnaissance_ruche_image_alt', 'La Ruche – campagne de sociofinancement à 110 %' ) ); ?>"
                >
            </div>
        </article>

        <!-- Concours de pitch avec Microcrédit Montréal -->
        <article class="reconnaissances__card">
            <div class="reconnaissances__card-content">
                <h3 class="reconnaissances__card-title">Concours de pitch avec Microcrédit Montréal</h3>
                <p class="reconnaissances__card-text">TicketLunch a participé au concours de pitch de Microcrédit Montréal pour présenter son projet. Cette occasion nous a permis de faire rayonner notre mission et de rencontrer des personnes engagées dans le développement d’entreprises d’ici.</p>
            </div>
            <div class="reconnaissances__card-image">
                <img
                    src="<?php echo esc_url( get_theme_mod( 'reconnaissance_pitch_image', '' ) ); ?>"
                    alt="<?php echo esc_attr( get_theme_mod( 'reconnaissance_pitch_image_alt', 'Concours de pitch avec Microcrédit Montréal' ) ); ?>"
                >
            </div>
        </article>

    </section>

</main>

<?php get_footer(); ?>