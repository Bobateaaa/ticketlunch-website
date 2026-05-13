<?php
/**
 * Template Name: Les emplois
 * Template Post Type: page
 */
get_header(); ?>

<main id="emplois">

    <!-- TITRE -->
    <section class="emplois-title title">
        <div class="emplois-title__content title__content">
            <p class="emplois-title__label title__label">L'organisation</p>
            <h1 class="emplois-title__heading title__heading">Les emplois</h1>
        </div>
        <div class="emplois-title__mascot title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- AVANTAGES -->
    <section class="avantages">
        <div class="avantages__intro">
            <h2 class="avantages__title">Les avantages</h2>
            <p class="avantages__subtitle">de travailler avec nous</p>
        </div>

        <div class="avantages__list">

            <article class="avantages__card">
                <h3 class="avantages__card-title">Une ambiance qui donne envie de venir travailler</h3>
                <p class="avantages__card-text">Quand l'atmosphère est détendue, respectueuse et positive, tu te sens naturellement plus à l'aise. Moins de stress inutile, plus de plaisir au quotidien.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Des relations humaines plus simples</h3>
                <p class="avantages__card-text">Les équipes sont souvent plus ouvertes, collaboratives et accessibles. Tu peux poser des questions, proposer des idées, et te sentir écouté.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Plus de créativité et de liberté</h3>
                <p class="avantages__card-text">Une entreprise cool encourage souvent l'initiative. Tu peux tester, proposer, innover sans avoir peur de te tromper.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Un meilleur équilibre vie pro / vie perso</h3>
                <p class="avantages__card-text">Horaires flexibles, télétravail, compréhension des imprévus... Ça change tout pour ton bien-être.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Une culture qui valorise les personnes, pas seulement les résultats</h3>
                <p class="avantages__card-text">Tu n'es pas juste un numéro. On reconnaît ton travail, on te félicite, on te fait confiance.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Une motivation naturelle</h3>
                <p class="avantages__card-text">Quand tu te sens bien, tu donnes le meilleur de toi-même sans forcer. Tu avances, tu apprends, tu évolues.</p>
            </article>

            <article class="avantages__card">
                <h3 class="avantages__card-title">Une fierté d'appartenance</h3>
                <p class="avantages__card-text">Tu es content de dire où tu travailles. Ça renforce ton engagement et ton envie de rester.</p>
            </article>

        </div>
    </section>

    <!-- EMPLOIS DISPONIBLES -->
    <section class="emplois-disponibles">
        <h2 class="emplois-disponibles__title">Emplois disponibles</h2>

        <?php
        $args = array(
            'post_type'      => 'job_listing',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $jobs = new WP_Query( $args );

        if ( $jobs->have_posts() ) : ?>

            <ul class="emplois-disponibles__list">

                <?php while ( $jobs->have_posts() ) : $jobs->the_post();
                    $is_filled  = get_post_meta( get_the_ID(), '_filled', true );
                    $job_type   = wp_get_post_terms( get_the_ID(), 'job_listing_type' );
                    $category   = wp_get_post_terms( get_the_ID(), 'job_listing_category' );
                    $type_label = ( ! is_wp_error( $job_type ) && ! empty( $job_type ) ) ? $job_type[0]->name : '';
                    $cat_label  = ( ! is_wp_error( $category ) && ! empty( $category ) ) ? $category[0]->name : '';
                    $pdf        = get_post_meta( get_the_ID(), '_job_pdf', true );
                ?>

                <li class="emplois-disponibles__item <?php echo $is_filled ? 'emplois-disponibles__item--filled' : ''; ?>">
                    <div class="emplois-disponibles__info">
                        <h3 class="emplois-disponibles__name"><?php the_title(); ?></h3>
                        <p class="emplois-disponibles__meta">
                            <?php if ( $cat_label ) echo esc_html( $cat_label ); ?>
                            <?php if ( $cat_label && $type_label ) echo ' • '; ?>
                            <?php if ( $type_label ) echo esc_html( $type_label ); ?>
                        </p>
                        <?php if ( $pdf ) : ?>
                            <a href="<?php echo esc_url( $pdf ); ?>" class="emplois-disponibles__pdf" target="_blank" rel="noopener">
                                Voir la description du poste
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="emplois-disponibles__action">
                        <?php if ( $is_filled ) : ?>
                            <span class="emplois-disponibles__badge emplois-disponibles__badge--indisponible">Indisponible</span>
                        <?php else : ?>
                            <button
                                class="emplois-disponibles__badge emplois-disponibles__badge--postulez"
                                onclick="document.getElementById('form-<?php the_ID(); ?>').toggleAttribute('hidden')"
                                aria-expanded="false"
                            >
                                Postulez
                            </button>

                            <div id="form-<?php the_ID(); ?>" class="emplois-disponibles__form" hidden>
                                <form method="post" enctype="multipart/form-data">
                                    <?php wp_nonce_field( 'candidature_poste', 'candidature_nonce' ); ?>
                                    <input type="hidden" name="candidature_type" value="poste">
                                    <input type="hidden" name="job_id" value="<?php the_ID(); ?>">

                                    <div class="emplois-disponibles__form-group">
                                        <label for="nom-<?php the_ID(); ?>">Nom complet *</label>
                                        <input type="text" id="nom-<?php the_ID(); ?>" name="candidature_nom" required>
                                    </div>

                                    <div class="emplois-disponibles__form-group">
                                        <label for="email-<?php the_ID(); ?>">Courriel *</label>
                                        <input type="email" id="email-<?php the_ID(); ?>" name="candidature_email" required>
                                    </div>

                                    <div class="emplois-disponibles__form-group">
                                        <label for="cv-<?php the_ID(); ?>">CV *</label>
                                        <input type="file" id="cv-<?php the_ID(); ?>" name="candidature_cv" accept=".pdf,.doc,.docx" required>
                                        <p class="emplois-disponibles__form-hint">PDF, DOC ou DOCX</p>
                                    </div>

                                    <div class="emplois-disponibles__form-group">
                                        <label for="lettre-<?php the_ID(); ?>">Lettre de motivation <span class="emplois-disponibles__form-optional">(optionnel)</span></label>
                                        <input type="file" id="lettre-<?php the_ID(); ?>" name="candidature_lettre" accept=".pdf,.doc,.docx">
                                        <p class="emplois-disponibles__form-hint">PDF, DOC ou DOCX</p>
                                    </div>

                                    <button type="submit" name="submit_candidature" class="emplois-disponibles__submit">Envoyer ma candidature</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>

                <?php endwhile; wp_reset_postdata(); ?>

            </ul>

        <?php else : ?>
            <p class="emplois-disponibles__empty">Aucun poste disponible pour le moment.</p>
        <?php endif; ?>

    </section>

    <!-- CANDIDATURES SPONTANÉES -->
    <section class="candidatures">
        <div class="candidatures__content">
            <h2 class="candidatures__title">Candidatures spontanées</h2>
            <p class="candidatures__text">Tu n'as pas trouvé un poste qui te parle ou tu aimerais simplement nous envoyer ton CV? On sera vraiment heureux de le recevoir et de découvrir ton profil.</p>

            <form class="candidatures__form" method="post" enctype="multipart/form-data" action="">
                <?php wp_nonce_field( 'candidature_spontanee', 'candidature_nonce' ); ?>
                <input type="hidden" name="candidature_type" value="spontanee">

                <div class="candidatures__form-group">
                    <label for="candidature-nom">Nom complet *</label>
                    <input type="text" id="candidature-nom" name="candidature_nom" required>
                </div>

                <div class="candidatures__form-group">
                    <label for="candidature-email">Courriel *</label>
                    <input type="email" id="candidature-email" name="candidature_email" required>
                </div>

                <div class="candidatures__form-group">
                    <label for="candidature-cv">CV *</label>
                    <input type="file" id="candidature-cv" name="candidature_cv" accept=".pdf,.doc,.docx" required>
                    <p class="candidatures__form-hint">PDF, DOC ou DOCX</p>
                </div>

                <div class="candidatures__form-group">
                    <label for="candidature-lettre">Lettre de motivation <span class="candidatures__form-optional">(optionnel)</span></label>
                    <input type="file" id="candidature-lettre" name="candidature_lettre" accept=".pdf,.doc,.docx">
                    <p class="candidatures__form-hint">PDF, DOC ou DOCX</p>
                </div>

                <button type="submit" name="submit_candidature" class="candidatures__cta">Envoie ton CV</button>
            </form>

        </div>
    </section>

</main>

<?php get_footer(); ?>