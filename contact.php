<?php
/**
 * Template Name: Nous joindre
 * Template Post Type: page
 */
get_header();

// Phone number (single source for the displayed text and the tel: link)
$phone_display = get_theme_mod( 'footer_phone', '450 751 2927' );
$phone_href    = preg_replace( '/\D/', '', $phone_display );

// Photo shown next to the form: Customizer image, or assets/contact-photo.jpg as a fallback
$contact_photo = get_theme_mod( 'contact_photo' );
if ( ! $contact_photo && file_exists( get_template_directory() . '/assets/contact-photo.jpg' ) ) {
    $contact_photo = get_template_directory_uri() . '/assets/contact-photo.jpg';
}
$contact_photo_alt = get_theme_mod( 'contact_photo_alt', '' );
?>

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

        <div class="contact-form__wrap" id="formulaire">

            <!-- Left column: the form -->
            <div class="contact-form__main">
                <?php
                if ( isset( $_POST['contact_form_submit'] ) && check_admin_referer( 'contact_form', 'contact_form_nonce' ) ) {
                    $first_name = sanitize_text_field( wp_unslash( $_POST['contact_form_firstname'] ?? '' ) );
                    $last_name  = sanitize_text_field( wp_unslash( $_POST['contact_form_lastname'] ?? '' ) );
                    $email      = sanitize_email( wp_unslash( $_POST['contact_form_email'] ?? '' ) );
                    $message    = sanitize_textarea_field( wp_unslash( $_POST['contact_form_message'] ?? '' ) );

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

                <form class="contact-form__form" method="post" action="#formulaire">
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

                    <div class="contact-form__group contact-form__group--message">
                        <label for="contact-message">Suggestions ou questions?</label>
                        <textarea id="contact-message" name="contact_form_message" rows="6"></textarea>
                    </div>

                    <div class="contact-form__footer">
                        <button type="submit" name="contact_form_submit" class="contact-form__submit">Soumettre</button>
                    </div>
                </form>
            </div>

            <!-- Right column: call to action, photo and phone -->
            <aside class="contact-form__aside">
                <h3 class="contact-form__aside-title">Je veux mes tickets lunch</h3>

                <?php if ( $contact_photo ) : ?>
                    <div class="contact-form__photo">
                        <img class="contact-form__photo-img" src="<?php echo esc_url( $contact_photo ); ?>" alt="<?php echo esc_attr( $contact_photo_alt ); ?>">
                    </div>
                <?php endif; ?>

                <div class="phone">
                    <p class="phone__number"><?php echo esc_html( $phone_display ); ?></p>
                    <a class="phone__icon" href="tel:<?php echo esc_attr( $phone_href ); ?>" aria-label="Appeler le <?php echo esc_attr( $phone_display ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-phone.svg" alt="">
                    </a>
                </div>
            </aside>

        </div>

    </section>

    <!-- MAP -->
    <section class="map">
        <div class="map__frame">
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
        </div>
    </section>

    <!-- DISCOVERY SURVEY: its own block, floating at the bottom-right of the screen -->
    <?php
    $survey_options = array( 'LinkedIn', 'Facebook', 'Recherche internet' );
    $survey_sent    = false;
    $survey_error   = false;

    if ( isset( $_POST['survey_submit'] ) && check_admin_referer( 'discovery_survey', 'survey_nonce' ) ) {
        $allowed = array_merge( $survey_options, array( 'Autre' ) );
        $chosen  = array_map( 'sanitize_text_field', wp_unslash( (array) ( $_POST['survey_source'] ?? array() ) ) );
        $sources = array_values( array_intersect( $allowed, $chosen ) );
        $other   = sanitize_text_field( wp_unslash( $_POST['survey_other'] ?? '' ) );

        if ( $sources || $other ) {
            $to      = get_option( 'admin_email' );
            $subject = 'Sondage – Découverte TicketLunch';
            $body    = 'Sources : ' . implode( ', ', $sources );
            if ( $other ) {
                $body .= "\nPrécision (Autre) : $other";
            }
            wp_mail( $to, $subject, $body );
            $survey_sent = true;
        } else {
            $survey_error = true;
        }
    }
    ?>

    <div class="survey" id="sondage" role="region" aria-labelledby="survey-title">
        <button type="button" class="survey__close" aria-label="Fermer le sondage">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M2 2L18 18M18 2L2 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </button>

        <h3 class="survey__title" id="survey-title">Comment avez-vous découvert TicketLunch?</h3>

        <?php if ( $survey_sent ) : ?>
            <p class="survey__success">Merci pour votre réponse!</p>
        <?php else : ?>
            <?php if ( $survey_error ) : ?>
                <p class="survey__error">Veuillez choisir au moins une option.</p>
            <?php endif; ?>

            <form class="survey__form" method="post">
                <?php wp_nonce_field( 'discovery_survey', 'survey_nonce' ); ?>

                <?php foreach ( $survey_options as $source ) : ?>
                    <label class="survey__option">
                        <span><?php echo esc_html( $source ); ?></span>
                        <input type="checkbox" name="survey_source[]" value="<?php echo esc_attr( $source ); ?>">
                    </label>
                <?php endforeach; ?>

                <label class="survey__option survey__option--other">
                    <input type="text" class="survey__other" name="survey_other" maxlength="100" autocomplete="off" data-lpignore="true" data-1p-ignore aria-label="Précisez">
                    <span>Autre</span>
                    <input type="checkbox" name="survey_source[]" value="Autre">
                </label>

                <button type="submit" name="survey_submit" class="survey__submit">Soumettre</button>
            </form>
        <?php endif; ?>
    </div>

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