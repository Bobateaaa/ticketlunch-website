<?php
/**
 * Template Name: À propos
 * Template Post Type: page
 */
get_header(); ?>

<main id="apropos">

    <!-- TITRE -->
    <section class="apropos-title title">
        <div class="apropos-title__content title__content">
            <p class="apropos-title__label title__label">L'organisation</p>
            <h1 class="apropos-title__heading title__heading">À propos</h1>
        </div>
        <div class="apropos-title__mascot title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

 <!-- NOTRE COMPAGNIE -->
    <section class="company">
        <h2 class="company__title">Notre compagnie</h2>
        <p class="company__text">Tick&Lunch est une entreprise qui offre un avantage social permettant aux employés de manger au restaurant à prix réduit, tout en soutenant l'économie locale et en contribuant à l'engagement des employés.</p>
    </section>

    <!-- NOTRE MISSION -->
    <section class="mission">
        <h2 class="mission__title">Notre mission</h2>

        <div class="mission__list">

            <article class="mission__card">
                <div class="mission__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mission-1.svg" alt="">
                </div>
                <div class="mission__card-body">
                    <h4 class="mission__card-title">Redonner du pouvoir d'achat</h4>
                    <p class="mission__card-text">Permettre à chaque travailleur de manger au restaurant tous les jours, sans y laisser sa paye.</p>
                </div>
            </article>

            <article class="mission__card">
                <div class="mission__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mission-2.svg" alt="">
                </div>
                <div class="mission__card-body">
                    <h4 class="mission__card-title">Repenser la consommation</h4>
                    <p class="mission__card-text">Relancer l'économie locale en créant un nouveau modèle d'avantage social inédit au Québec.</p>
                </div>
            </article>

            <article class="mission__card">
                <div class="mission__card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mission-3.svg" alt="">
                </div>
                <div class="mission__card-body">
                    <h4 class="mission__card-title">Devenir une référence</h4>
                    <p class="mission__card-text">S'imposer comme l'entreprise de référence en avantages sociaux liés à la restauration.</p>
                </div>
            </article>

        </div>

        <div class="mission__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot-card.png" alt="">
        </div>
    </section>

    <!-- NOTRE ORIGINE -->
    <section class="origin">
        <h2 class="origin__title">Notre origine</h2>
        <p class="origin__text">Depuis la pandémie, l'inflation a considérablement réduit le pouvoir d'achat des Québécois. Le repas du midi — pourtant essentiel au bien-être des travailleurs — est devenu une dépense difficile à maintenir au quotidien.</p>
        <p class="origin__text">Angélique Bourbier et Patrice Coujandasamy ont identifié cette réalité et décidé d'agir. Forts de leur formation en restauration et en graphisme, et de décennies d'expérience combinée, ils ont conçu un système permettant de réduire concrètement le coût du repas au restaurant — sans compromis sur la qualité de vie.</p>
        <p class="origin__text">C'est ainsi qu'est né TicketLunch : le premier avantage social co-financé dédié à la restauration au Québec, pensé pour les travailleurs, les employeurs et les restaurateurs à la fois.</p>
    </section>

</main>

<?php get_footer(); ?>