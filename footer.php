<?php
/**
 * Footer Template
 */
?>

    <div class="cuisine-band" aria-hidden="true">
        <div class="cuisine-band__track">
            <span class="cuisine-band__item">🍝 Italien</span>
            <span class="cuisine-band__item">🥗 Méditerranéen</span>
            <span class="cuisine-band__item">🌮 Mexicain</span>
            <span class="cuisine-band__item">☕ Café</span>
            <span class="cuisine-band__item">🍔 Burgers</span>
            <span class="cuisine-band__item">🍜 Coréen</span>
            <span class="cuisine-band__item">🍛 Indien</span>
            <span class="cuisine-band__item">🍣 Japonais</span>
            <span class="cuisine-band__item">🍕 Pizza</span>
            <span class="cuisine-band__item">🥩 Steakhouse</span>
            <span class="cuisine-band__item">🥟 Chinois</span>
            <span class="cuisine-band__item">🧆 Libanais</span>
            <span class="cuisine-band__item">🥐 Français</span>
            <span class="cuisine-band__item">🍤 Fruits de mer</span>
            <span class="cuisine-band__item">🌯 Grec</span>
            <span class="cuisine-band__item">🍻 Brasserie</span>
            <span class="cuisine-band__item">🥬 Végétarien</span>
            <span class="cuisine-band__item">🌱 Végane</span>
            <span class="cuisine-band__item">🍱 Thaï</span>
            <span class="cuisine-band__item">🫔 Péruvien</span>
            <span class="cuisine-band__item">🍖 BBQ</span>
            <span class="cuisine-band__item">🧁 Brunch</span>
            <span class="cuisine-band__item">🥘 Espagnol</span>
            <span class="cuisine-band__item">🍲 Vietnamien</span>
            <span class="cuisine-band__item">🫕 Éthiopien</span>
            <!-- duplicated for seamless loop -->
            <span class="cuisine-band__item">🍝 Italien</span>
            <span class="cuisine-band__item">🥗 Méditerranéen</span>
            <span class="cuisine-band__item">🌮 Mexicain</span>
            <span class="cuisine-band__item">☕ Café</span>
            <span class="cuisine-band__item">🍔 Burgers</span>
            <span class="cuisine-band__item">🍜 Coréen</span>
            <span class="cuisine-band__item">🍛 Indien</span>
            <span class="cuisine-band__item">🍣 Japonais</span>
            <span class="cuisine-band__item">🍕 Pizza</span>
            <span class="cuisine-band__item">🥩 Steakhouse</span>
            <span class="cuisine-band__item">🥟 Chinois</span>
            <span class="cuisine-band__item">🧆 Libanais</span>
            <span class="cuisine-band__item">🥐 Français</span>
            <span class="cuisine-band__item">🍤 Fruits de mer</span>
            <span class="cuisine-band__item">🌯 Grec</span>
            <span class="cuisine-band__item">🍻 Brasserie</span>
            <span class="cuisine-band__item">🥬 Végétarien</span>
            <span class="cuisine-band__item">🌱 Végane</span>
            <span class="cuisine-band__item">🍱 Thaï</span>
            <span class="cuisine-band__item">🫔 Péruvien</span>
            <span class="cuisine-band__item">🍖 BBQ</span>
            <span class="cuisine-band__item">🧁 Brunch</span>
            <span class="cuisine-band__item">🥘 Espagnol</span>
            <span class="cuisine-band__item">🍲 Vietnamien</span>
            <span class="cuisine-band__item">🫕 Éthiopien</span>
        </div>
    </div>

<footer class="footer">
    <div class="footer__brand">
        <?php if ( get_theme_mod( 'header_logo' ) ) : ?>
            <img class="footer__logo" src="<?php echo esc_url( get_theme_mod( 'header_logo' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'logo_title', get_bloginfo( 'name' ) ) ); ?>">
        <?php endif; ?>
        <p class="footer__logo-name"><?php echo esc_html( get_theme_mod( 'logo_title', get_bloginfo( 'name' ) ) ); ?></p>
    </div>

    <div class="footer__info">
        <p class="footer__description">Tick&Lunch est une entreprise qui offre un avantage social permettant aux employés de manger au restaurant à prix réduit, tout en soutenant l'économie locale et en contribuant à l'engagement des employés.</p>
        <p class="footer__phone">Numéro: <?php echo esc_html( get_theme_mod( 'footer_phone', '450 751 2927' ) ); ?></p>
    </div>

    <div class="footer__social">
        <p class="footer__social-title">Social</p>
        <ul class="footer__social-list">
            <li class="footer__social-item">
                <a class="footer__social-link" href="<?php echo esc_url( get_theme_mod( 'facebook_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">Facebook</a>
            </li>
            <li class="footer__social-item">
                <a class="footer__social-link" href="<?php echo esc_url( get_theme_mod( 'twitter_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">Twitter</a>
            </li>
            <li class="footer__social-item">
                <a class="footer__social-link" href="<?php echo esc_url( get_theme_mod( 'instagram_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
            </li>
        </ul>
    </div>

    <div class="footer__swirl" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pink-motif-footer.svg" alt="">
    </div>

    <div class="footer__bottom">
        <p class="footer__copyright">©2026 Ce site appartient à Tick&Lunch inc.</p>
        <a class="footer__terms" href="<?php echo esc_url( get_permalink( get_page_by_path( 'termes-et-conditions' ) ) ); ?>">Termes et conditions</a>
    </div>
    
</footer>

<?php wp_footer(); ?>
</body>
</html>