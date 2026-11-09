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
          <!--<p class="valeurs-cards__ambition">Notre ambition : devenir le leader québécois des avantages sociaux alimentaires, enrichissant les programmes de bien-être et revitalisant la restauration locale. Nos valeurs : bien-être, innovation, accessibilité, diversité et inclusion</p>-->

        <div class="valeurs-cards__list">

            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo esc_url( ticketlunch_apropos_img( 'valeurs_icon_bienetre', 'icon-bienetre.svg' ) ); ?>" alt="">
                </div>
                <h3 class="valeurs-cards__card-title">Bien-être</h3>
                <p class="valeurs-cards__card-text">Améliorer le bien-être des employés grâce à des repas abordables.</p>
            </article>
 
            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo esc_url( ticketlunch_apropos_img( 'valeurs_icon_innovation', 'icon-innovation.svg' ) ); ?>" alt="">
                </div>
                <h3 class="valeurs-cards__card-title">Innovation</h3>
                <p class="valeurs-cards__card-text">Renforcer la rétention en offrant aux employeurs la possibilité d'adapter le montant du titre</p>
            </article>
 
            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo esc_url( ticketlunch_apropos_img( 'valeurs_icon_accessibilite', 'icon-accessibilité.svg' ) ); ?>" alt="">
                </div>
                <h3 class="valeurs-cards__card-title">Accessibilité</h3>
                <p class="valeurs-cards__card-text">Soutenir la restauration locale en incitant à fréquenter les établissements voisins</p>
            </article>
 
            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo esc_url( ticketlunch_apropos_img( 'valeurs_icon_diversite', 'icon-diversite.svg' ) ); ?>" alt="">
                </div>
                <h3 class="valeurs-cards__card-title">Diversité</h3>
                <p class="valeurs-cards__card-text">Nous valorisons la diversité et créons un environnement où chacun peut s’épanouir pleinement.</p>
            </article>
 
            <article class="valeurs-cards__card">
                <div class="valeurs-cards__card-icon" aria-hidden="true">
                    <img src="<?php echo esc_url( ticketlunch_apropos_img( 'valeurs_icon_inclusion', 'icon-inclusion.svg' ) ); ?>" alt="">
                </div>
                <h3 class="valeurs-cards__card-title">Inclusion</h3>
                <p class="valeurs-cards__card-text">Nous plaçons l’inclusion au cœur de nos actions afin que chaque personne se sente respectée et reconnue.</p>
            </article>

        </div>
    </section>

</main>

<?php get_footer(); ?>