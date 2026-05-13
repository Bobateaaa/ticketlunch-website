<?php
/**
 * Template Name: Nos valeurs
 * Template Post Type: page
 */
get_header(); ?>

<main id="valeurs">

    <!-- TITRE -->
    <section class="valeurs-title title">
        <div class="valeurs-title__content title__content">
            <p class="valeurs-title__label title__label">L'organisation</p>
            <h1 class="valeurs-title__heading title__heading">Nos valeurs</h1>
        </div>
        <div class="valeurs-title__mascot title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- NOS VALEURS -->
    <section class="valeurs-cards">
        <p class="valeurs-cards__ambition">Notre ambition : devenir le leader québécois des avantages sociaux alimentaires, enrichissant les programmes de bien-être et revitalisant la restauration locale. Nos valeurs : bien-être, innovation, accessibilité, diversité et inclusion</p>

        <div class="valeurs-cards__list">

            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-bienetre.svg" alt="">
                </div>
                <h2 class="valeurs-cards__card-title">Bien-être</h2>
                <p class="valeurs-cards__card-text">Améliorer le bien-être des employés grâce à des repas abordables.</p>
            </article>

            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-innovation.svg" alt="">
                </div>
                <h2 class="valeurs-cards__card-title">Innovation</h2>
                <p class="valeurs-cards__card-text">Renforcer la rétention en offrant aux employeurs la possibilité d'adapter le montant du titre</p>
            </article>

            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-accessibilite.svg" alt="">
                </div>
                <h2 class="valeurs-cards__card-title">Accessibilité</h2>
                <p class="valeurs-cards__card-text">Soutenir la restauration locale en incitant à fréquenter les établissements voisins</p>
            </article>

        </div>
    </section>

</main>

<?php get_footer(); ?>