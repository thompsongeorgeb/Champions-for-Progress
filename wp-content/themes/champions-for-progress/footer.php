<?php
/**
 * The footer template
 *
 * @package Champions_For_Progress
 */
?>

<footer class="site-footer">
    <div class="site-container">
        <div class="footer-widgets">
            <?php
            if ( is_active_sidebar( 'footer-1' ) ) {
                dynamic_sidebar( 'footer-1' );
            }
            ?>
        </div>

        <div class="footer-info">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            <p>Champions for Progress - Christian Business Directory &amp; Job Board</p>
            <p>Based in Inglewood, California</p>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'depth'          => 1,
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
