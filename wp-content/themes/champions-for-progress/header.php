<?php
/**
 * The header template
 *
 * @package Champions_For_Progress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-container">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php
            }
            ?>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => function() {
                    echo '<ul>
                        <li><a href="' . home_url( '/' ) . '">Home</a></li>
                        <li><a href="' . home_url( '/businesses/' ) . '">Business Directory</a></li>
                        <li><a href="' . home_url( '/jobs/' ) . '">Job Board</a></li>
                        <li><a href="' . home_url( '/beyond-job-check/' ) . '">Beyond Job Check</a></li>
                        <li><a href="' . home_url( '/membership/' ) . '">Join</a></li>
                    </ul>';
                },
            ) );
            ?>
        </nav>
    </div>
</header>
