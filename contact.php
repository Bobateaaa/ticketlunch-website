<?php
/**
 * Template Name: Nous joindre
 * Template Post Type: page
 */
get_header(); ?>

<main id="contact">

    <!-- TITRE -->
    <section class="contact-title title">
        <div class="contact-title__content title__content">
            <p class="contact-title__label title__label">Nous joindre</p>
            <h1 class="contact-title__heading title__heading">Nous joindre</h1>
        </div>
        <div class="contact-title__mascot title__mascot" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact-form">

        <div class="contact-form__intro">
            <h2 class="contact-form__title">Interessé par notre concept? Contactez-nous!</h2>
            <p class="contact-form__text">On a vraiment hâte de vous rencontrer et de voir ce qu'on peut créer ensemble.</p>
        </div>

        <div class="contact-form__wrap">
            <?php
            if ( isset( $_POST['contact_form_submit'] ) && check_admin_referer( 'contact_form', 'contact_form_nonce' ) ) {
                $first_name = sanitize_text_field( $_POST['contact_form_firstname'] ?? '' );
                $last_name  = sanitize_text_field( $_POST['contact_form_lastname'] ?? '' );
                $email      = sanitize_email( $_POST['contact_form_email'] ?? '' );
                $message    = sanitize_textarea_field( $_POST['contact_form_message'] ?? '' );

                $to      = get_option( 'admin_email' );
                $subject = 'Nouveau message – Nous joindre';
                $body    = "Prénom : $first_name\nNom : $last_name\nCourriel : $email\n\nMessage :\n$message";
                $headers = array( 'Content-Type: text/plain; charset=UTF-8', "Reply-To: $email" );

                if ( wp_mail( $to, $subject, $body, $headers ) ) {
                    echo '<p class="contact-form__success">Votre message a bien été envoyé. Merci!</p>';
                } else {
                    echo '<p class="contact-form__error">Une erreur est survenue. Veuillez réessayer.</p>';
                }
            }
            ?>

            <form class="contact-form__form" method="post">
                <?php wp_nonce_field( 'contact_form', 'contact_form_nonce' ); ?>

                <div class="contact-form__row">
                    <div class="contact-form__group">
                        <label for="contact-firstname">Prénom</label>
                        <input type="text" id="contact-firstname" name="contact_form_firstname" required>
                    </div>
                    <div class="contact-form__group">
                        <label for="contact-lastname">Nom</label>
                        <input type="text" id="contact-lastname" name="contact_form_lastname" required>
                    </div>
                </div>

                <div class="contact-form__group">
                    <label for="contact-email">Courriel</label>
                    <input type="email" id="contact-email" name="contact_form_email" required>
                </div>

                <div class="contact-form__group">
                    <label for="contact-message">Suggestions ou questions?</label>
                    <textarea id="contact-message" name="contact_form_message" rows="6"></textarea>
                </div>

                <div class="contact-form__footer">
                    <button type="submit" name="contact_form_submit" class="contact-form__submit">Soumettre</button>
                </div>
            </form>
        </div>

        <div class="phone">
            <p class="phone__number">Numéro: <?php echo esc_html( get_theme_mod( 'footer_phone', '450 751 2927' ) ); ?></p>
            <a class="phone__icon" href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', get_theme_mod( 'footer_phone', '4507512927' ) ) ); ?>" aria-label="Appeler">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-phone.svg" alt="">
            </a>
        </div>

    </section>


    <!-- DISCOVERY SURVEY -->
    <section class="survey">
        <div class="survey__content">
        <h3 class="survey__title">Comment avez-vous découvert TicketLunch?</h3>

        <?php
        if ( isset( $_POST['survey_submit'] ) && check_admin_referer( 'discovery_survey', 'survey_nonce' ) ) {
            $sources = array_map( 'sanitize_text_field', $_POST['survey_source'] ?? [] );
            $to      = get_option( 'admin_email' );
            $subject = 'Sondage – Découverte TicketLunch';
            $body    = 'Sources : ' . implode( ', ', $sources );
            wp_mail( $to, $subject, $body );
            echo '<p class="survey__success">Merci pour votre réponse!</p>';
        }
        ?>

        <form class="survey__form" method="post">
            <?php wp_nonce_field( 'discovery_survey', 'survey_nonce' ); ?>

            <?php
            $sources = [ 'LinkedIn', 'Facebook', 'Recherche internet', 'Autre' ];
            foreach ( $sources as $source ) : ?>
                <label class="survey__option">
                    <?php echo esc_html( $source ); ?>
                    <input type="checkbox" name="survey_source[]" value="<?php echo esc_attr( $source ); ?>">
                </label>
            <?php endforeach; ?>

            <button type="submit" name="survey_submit" class="survey__submit">Soumettre</button>
        </form>
        </div>
    </section>

    <!-- MAP -->
    <section class="map">
        <iframe
            class="map__iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.5!2d-73.5673!3d45.5017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z!5e0!3m2!1sfr!2sca!4v1"
            width="100%"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Localisation TicketLunch">
        </iframe>
    </section>

    <!-- CTA BANNER -->
    <section class="cta-banner">
        <div class="cta-banner__content">
            <h2 class="cta-banner__title"><?php echo wp_kses_post( get_theme_mod( 'contact_banner_title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ) ); ?></h2>
            <a href="<?php echo esc_url( get_theme_mod( 'contact_banner_url', '#' ) ); ?>" class="cta-banner__button">
                <?php echo esc_html( get_theme_mod( 'contact_banner_label', 'En savoir plus' ) ); ?>
            </a>
        </div>
        <div class="cta-banner__deco" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mascot.png" alt="">
        </div>
    </section>

</main>

<?php get_footer(); ?>