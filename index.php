<!-- *****************************
    Page d'accueil du thème WordPress
****************************** -->

<?php get_header(); ?>

<!-- 
    CONTENU DE LA PAGE
-->
    <main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; endif; ?>
    </main>


<!-- 
    FOOTER DE LA PAGE
-->
    <footer>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer-menu',
        ) );
        ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>