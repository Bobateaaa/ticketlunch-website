<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 */
get_header(); ?>

<main id="home">

    <div class="hero__swirl" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/blue-motif-1.svg" alt="">
    </div>

    <section class="hero">
        <div class="hero__img">
            <img src="<?php echo esc_url( get_theme_mod( 'hero_image_1', '' ) ); ?>"
                alt="<?php echo esc_attr( get_theme_mod( 'hero_image_1_alt', '' ) ); ?>">
        </div>
        <div class="hero__content">
            <p class="hero__badge">Nouveau au Québec<img src="<?php echo esc_url( get_theme_mod( 'badge_icon', '' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'badge_icon_alt', '' ) ); ?>"></p>
            <h3 class="hero__tagline"><span class="hero__tagline--underline">Offrez un avantage social</span> qui permet à vos employés de réduire leurs dépenses lorsqu’ils mangent au restaurant.</h3>
            <button class="hero__cta">En savoir plus</button>
        </div>
    </section>

<!-- POURQUOI CHOISIR TICKETLUNCH -->
<section class="why">
    <h2 class="why__title">Pourquoi choisir <span class="why__title--highlight">TicketLunch?</span></h2>

    <div class="why__list">

        <article class="why__card">
            <a href="#employeurs" class="why__card-link">
                <div class="why__card-image why__card-image--employers"
                    style="background-image: url('<?php echo esc_url( get_theme_mod( 'why_image_employers', '' ) ); ?>');">
                </div>
            </a>
            <p class="why__card-label">Les employeurs</p>
            <p class="why__card-text">On propose un avantage concret qui vous aide à vous démarquer et à bâtir des équipes plus engagées.</p>
        </article>

        <article class="why__card">
            <a href="#employes" class="why__card-link">
                <div class="why__card-image why__card-image--employees"
                    style="background-image: url('<?php echo esc_url( get_theme_mod( 'why_image_employees', '' ) ); ?>');">
                </div>
            </a>
            <p class="why__card-label">Les employés</p>
            <p class="why__card-text">On permet aux employés de profiter de repas variés au restaurant à prix réduit.</p>
        </article>

        <article class="why__card">
            <a href="#restaurateurs" class="why__card-link">
                <div class="why__card-image why__card-image--restaurants"
                    style="background-image: url('<?php echo esc_url( get_theme_mod( 'why_image_restaurants', '' ) ); ?>');">
                </div>
            </a>
            <p class="why__card-label">Les restaurateurs</p>
            <p class="why__card-text">On aide les restaurants locaux à augmenter leur achalandage en semaine.</p>
        </article>

    </div>
</section>

    <div class="hero__swirl--second" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pink-motif-2.svg" alt="">
    </div>

    <!-- L'IDÉE DERRIÈRE TICKETLUNCH -->
    <section class="idea">
        <div class="idea__content">
        <h2 class="idea__title">L'idée derrière TicketLunch</h2>

        <div class="idea__list">

            <article class="idea__item">
                <span class="idea__number">1</span>
                <h3 class="idea__item--title">Une solution concrète</h3>
                <p class="idea__item--text">Ce type d'avantage social est déjà largement utilisé en Europe et adopté par de nombreuses entreprises de toutes tailles. Il permet d'offrir aux employés un accès plus simple et plus abordable aux repas au restaurant, tout en s'intégrant facilement dans les organisations.</p>
                <p class="idea__item--text">Pour les employeurs, c'est une solution concrète et déjà éprouvée qui améliore l'expérience des employés sans complexifier la gestion interne.</p>
                <p class="idea__item--text">TicketLunch s'inspire de ces modèles pour les adapter au marché québécois.</p>
            </article>

            <article class="idea__item">
                <span class="idea__number">2</span>
                <h3 class="idea__item--title">Un besoin réel</h3>
                <p class="idea__item--text">Dans un contexte où le coût de la vie augmente, nous voulons offrir une solution qui aide les gens à mieux profiter de leurs repas, sans pression financière.</p>
                <p class="idea__item--text">TicketLunch est né d'une idée simple : rendre les repas au restaurant plus accessibles au quotidien.</p>
            </article>

            <div class="idea__mascot" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot-holding-card.png" alt="">
             </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section des statistiques -->
    <section class="stats">
        <h2 class="stats__title">Manger au restaurant, <span class="stats__title--underline">ce n'est plus comme avant</span></h2>

        <div class="stats__list">
            <article class="stats__card stats__card--expandable">
                <h3 class="stats__card-title">Les Canadiens vont moins souvent au restaurant</h3>
                <p class="stats__card-text">
                    <span class="stats__card-text--reduced">Avec la hausse du coût de la vie, les habitudes de consommation changent. Près...</span>
                    <span class="stats__card-text--full">Avec la hausse du coût de la vie, les habitudes de consommation changent. Près de 75 % des Canadiens réduisent leurs sorties au restaurant, et cette tendance est encore plus marquée chez les jeunes adultes. Les prix des menus ayant augmenté, beaucoup privilégient désormais la cuisine à la maison ou des options plus économiques. <br><br>Les restaurateurs, eux, font face à une pression croissante : coûts des ingrédients, main‑d'œuvre et énergie en hausse. Résultat : une baisse de fréquentation qui touche l'ensemble du secteur.</span>
                </p>
                <button class="stats__card-toggle" aria-expanded="false">+</button>
            </article>

            <article class="stats__card stats__card--highlight">
                <p class="stats__card-label">Une baisse de fréquentation qui touche l'ensemble du secteur.</p>
                <span class="stats__card-stat">75%</span>
            </article>

            <article class="stats__card stats__card--dark">
                <h3 class="stats__card-title">Tendances restos Québec (2025)</h3>
                <p class="stats__card-text">
                    <span class="stats__card-text--reduced">Les Québécois sortent moins souvent au restaurant, mais recherchent davantage de qualité, de rapidité et de valeur...</span>
                    <span class="stats__card-text--full">Les Québécois sortent moins souvent au restaurant, mais recherchent davantage de qualité, de rapidité et de valeur. <br><br>Les restaurateurs répondent avec plus de promotions, des menus abordables et une adoption accrue de la technologie. Malgré la baisse de fréquentation, la scène culinaire reste dynamique, avec de nouvelles adresses et une forte mise en valeur des produits locaux.</span>
                </p>
                <button class="stats__card-toggle" aria-expanded="false">+</button>
                <div class="stats__card-figures">
                    <div class="stats__figure">
                        <img class="stats__figure-icon" src="<?php echo get_template_directory_uri(); ?>/assets/shop.svg" alt="">
                        <p class="stats__figure-label">Majorité des restaurants touchés par l'inflation :</p>
                        <span class="stats__figure-value">85%</span>
                    </div>
                    <div class="stats__figure">
                        <img class="stats__figure-icon" src="<?php echo get_template_directory_uri(); ?>/assets/shop.svg" alt="">
                        <p class="stats__figure-label">Augmentation des prix au restaurant en 2025 :</p>
                        <span class="stats__figure-value">~3,1%</span>
                    </div>
                </div>
            </article>
        </div>

        <div class="stats__swirl--third" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/blue-motif-2.svg" alt="">
        </div>
    </section>

    <!-- CTA / CONTACT -->
    <section class="cta">
        <div class="cta__content">
            <h2 class="cta__title">Posez-vous des questions ?</h2>
            <p class="cta__text">Que vous soyez employeur, employé ou restaurateur, notre équipe est là pour répondre à vos questions et vous accompagner. Contactez-nous pour plus de détails.</p>
            <a href="#contact" class="cta__button">Contactez-nous</a>
        </div>

        <div class="cta__deco-hands" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/homepage_hands.png" alt="">
        </div>

        <div class="cta__deco-question-mark" aria-hidden="true">
            <p>?</p>
        </div>
 
    </section>
</main>

<?php get_footer(); ?>