<?php
/**
 * Template Name: Épicerie
 * Template Post Type: page
 */
get_header(); ?>

<main id="epicerie">

    <!-- TITRE DE PAGE -->
    <section class="epicerie-titre title">
        <div class="epicerie-titre__contenu title__content">
            <p class="epicerie-titre__label title__label">Le projet</p>
            <h1 class="epicerie-titre__heading title__heading">Projet épicerie</h1>
        </div>
        <div class="epicerie-titre__mascotte title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- MISES À JOUR : textes à gauche, photo des sacs à droite -->
    <section class="mises-a-jour">

        <div class="mises-a-jour__textes">

            <div class="bloc-texte">
                <h3 class="bloc-texte__titre">Restez connectés</h3>
                <p class="bloc-texte__description">Les mises à jour seront publiées ici dès qu'une nouvelle étape sera franchie. Suivez l'évolution du programme et découvrez les prochaines améliorations à venir.</p>
            </div>

            <div class="bloc-texte">
                <h3 class="bloc-texte__titre">Merci de votre patience</h3>
                <p class="bloc-texte__description">Nous savons que l'utilisation en épicerie est très attendue. Votre patience nous permet de mettre en place une solution solide, durable et avantageuse pour tous. Dès que tout sera prêt, une annonce officielle sera publiée.</p>
            </div>

            <div class="bloc-texte">
                <h3 class="bloc-texte__titre">On se rapproche du but</h3>
                <p class="bloc-texte__description">Nous savons que l'utilisation en épicerie est très attendue. Votre patience nous permet de mettre en place une solution solide, durable et avantageuse pour tous. Dès que tout sera prêt, une annonce officielle sera publiée.</p>
            </div>

        </div>

        <div class="mises-a-jour__image">
            <img
                src="<?php echo esc_url( get_theme_mod( 'epicerie_photo_sacs', '' ) ); ?>"
                alt="<?php echo esc_attr( get_theme_mod( 'epicerie_photo_sacs_alt', 'Sacs TicketLunch' ) ); ?>"
            >
        </div>

    </section>

    <!-- AVANCEMENT : photo du sac épicerie à gauche, textes à droite -->
    <section class="avancement-epicerie">

        <div class="avancement-epicerie__image">
            <img
                src="<?php echo esc_url( get_theme_mod( 'epicerie_photo_sac_epicerie', '' ) ); ?>"
                alt="<?php echo esc_attr( get_theme_mod( 'epicerie_photo_sac_epicerie_alt', 'Sac d\'épicerie TicketLunch' ) ); ?>"
            >
        </div>

        <div class="avancement-epicerie__textes">

            <div class="bloc-texte">
                <h3 class="bloc-texte__titre">Une transition en cours</h3>
                <p class="bloc-texte__description">L'intégration des ticket-lunch dans les épiceries demande encore quelques ajustements techniques et administratifs. C'est un processus qui avance, étape par étape. Dès que les commerces seront prêts, vous serez les premiers informés.</p>
            </div>

            <div class="bloc-texte">
                <h3 class="bloc-texte__titre">Une nouveauté qui s'en vient</h3>
                <p class="bloc-texte__description">Les ticket-lunch évoluent, et leur utilisation aussi. Même s'ils ne sont pas encore acceptés dans les épiceries, le projet avance et nous travaillons activement à élargir les possibilités. Restez à l'affût : de belles améliorations s'en viennent.</p>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>