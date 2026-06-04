<?php
/**
 * Template Name: Fondation
 * Template Post Type: page
 */
get_header(); ?>

<main id="fondation">

    <!-- TITRE DE PAGE -->
    <section class="fondation-titre title">
        <div class="fondation-titre__contenu title__content">
            <p class="fondation-titre__label title__label">Le projet</p>
            <h1 class="fondation-titre__heading title__heading">Fondation</h1>
        </div>
        <div class="fondation-titre__mascotte title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- INTRO + IMAGE : textes à gauche, photo de l'équipe à droite -->
    <section class="intro">

        <div class="intro__textes">
            <p class="intro__chapeau">Un être humain dans le besoin — et un geste qui change tout</p>

            <div class="bloc-texte">
                <p class="bloc-texte__description">Il y a des moments dans la vie où même les gestes les plus simples deviennent difficiles. Pour certaines personnes, préparer un repas, acheter un lunch ou simplement tenir jusqu'à la fin du mois représente un défi quotidien. C'est le cas de nombreuses personnes qui, malgré leurs efforts, se retrouvent dans une situation fragile, où chaque dollar compte et où chaque aide fait une réelle différence.</p>
            </div>

            <div class="bloc-texte">
                <p class="bloc-texte__description">Imagine quelqu'un qui se lève chaque matin avec la volonté de s'en sortir, mais qui doit jongler avec des choix impossibles : payer une facture ou manger correctement, acheter un repas ou garder un peu d'argent pour le transport. Ce sont des réalités silencieuses, souvent invisibles, mais bien présentes.</p>
            </div>

            <div class="bloc-texte">
                <p class="bloc-texte__description">C'est dans ces moments-là que Ticketlunch devient plus qu'un simple outil : il devient un soutien, un souffle, un répit. Pour une personne en difficulté, recevoir un Ticketlunch, c'est recevoir un instant de dignité. C'est pouvoir manger sans s'inquiéter. C'est sentir que quelqu'un, quelque part, a pensé à elle.</p>
            </div>
        </div>

        <div class="intro__image">
            <img
                src="<?php echo esc_url( get_theme_mod( 'fondation_photo_equipe', '' ) ); ?>"
                alt="<?php echo esc_attr( get_theme_mod( 'fondation_photo_equipe_alt', 'Équipe TicketLunch' ) ); ?>"
            >
        </div>

    </section>

    <!-- CITATION -->
    <section class="citation">
        <blockquote class="citation__texte">
            <p>Un Ticketlunch, ce n'est pas seulement un repas.</p>
            <p>C'est un geste humain.</p>
            <p>C'est une main tendue.</p>
            <p>C'est un rappel que personne ne devrait avoir à affronter la faim seul.</p>
        </blockquote>
    </section>

    <!-- CONCLUSION -->
    <section class="conclusion">
        <div class="bloc-texte">
            <p class="bloc-texte__description">Grâce à ce soutien, une personne peut reprendre un peu de contrôle sur son quotidien. Elle peut se concentrer sur ses démarches, sur sa santé, sur sa stabilité. Elle peut respirer un peu mieux. Et parfois, c'est exactement ce dont un être humain a besoin pour continuer d'avancer.</p>
        </div>
    </section>

</main>

<?php get_footer(); ?>