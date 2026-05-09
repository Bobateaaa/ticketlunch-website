<?php
/**
 * Template Name: Notre équipe
 * Template Post Type: page
 */
get_header(); ?>

<main id="equipe">

    <!-- TITRES -->
    <section class="equipe-title title">
        <div class="equipe-title__content title__content">
            <p class="equipe-title__label title__label">L'organisation</p>
            <h1 class="equipe-title__heading title__heading">Notre équipe</h1>
        </div>
        <div class="equipe-title__mascot tite__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- DIRECTEURS -->
    <section class="directors">
        <div class="directors__intro">
            <h2 class="directors__title">Les directeurs</h2>
            <p class="directors__text">Montréalais d'origine Française, nous partageons nos vies et nos expériences dans les domaines de la restauration et du graphisme depuis 21 ans.</p>
            <p class="directors__text">Passionnés dans ce que nous faisons, nous avons unis nos forces pour créer TicketLunch inc.</p>
            <p class="directors__text">Offrir un avantage social unique au Québec, c'est chez nous que ça se passe.</p>
        </div>

        <div class="directors__list">

            <article class="directors__card">
                <div class="directors__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholder.webp" alt="Angélique Bourbier">
                </div>
                <div class="directors__card-content">
                    <h3 class="directors__card-name">Angélique Bourbier</h3>
                    <p class="directors__card-role">Créatrice et chef de projet</p>
                    <blockquote class="directors__card-quote">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    </blockquote>
                </div>
            </article>

            <article class="directors__card">
                <div class="directors__card-image">
                    <img src="" alt="Patrice Coujandasamy">
                </div>
                <div class="directors__card-content">
                    <h3 class="directors__card-name">Patrice Coujandasamy</h3>
                    <p class="directors__card-role">Directeur et conseiller en vente</p>
                    <blockquote class="directors__card-quote">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    </blockquote>
                </div>
            </article>

        </div>
    </section>

    <!-- EMPLOYÉS -->
    <section class="employees">
        <div class="employees__intro">
            <h2 class="employees__title">Les employés</h2>
            <p class="employees__text">Une équipe multidisciplinaire qui contribue au développement d'une solution innovante et accessible.</p>
        </div>

        <div class="employees__list">

            <article class="employees__card">
                <div class="employees__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-reseau.svg" alt="">
                </div>
                <p class="employees__card-title">Gestionnaire des réseaux TicketLunch</p>
                <a href="#" class="employees__card-cta">Consulter le poste</a>
            </article>

            <article class="employees__card">
                <div class="employees__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-comptable.svg" alt="">
                </div>
                <p class="employees__card-title">Comptable</p>
                <a href="#" class="employees__card-cta">Consulter le poste</a>
            </article>

            <article class="employees__card">
                <div class="employees__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-representant.svg" alt="">
                </div>
                <p class="employees__card-title">Représentant(e) des entreprises</p>
                <a href="#" class="employees__card-cta">Consulter le poste</a>
            </article>

        </div>
    </section>

    <!-- CTA REJOINDRE -->
    <section class="join">
        <div class="join__content">
            <h2 class="join__title">Intéressé à nous rejoindre?</h2>
        </div>
        <div class="join__action">
            <a href="#" class="join__cta">Voir les postes vacants</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>