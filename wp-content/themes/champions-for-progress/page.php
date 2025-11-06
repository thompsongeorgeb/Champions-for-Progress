<?php
/**
 * The template for displaying pages
 *
 * @package Champions_For_Progress
 */

get_header(); ?>

<div class="site-content">
    <div class="site-container">
        <main class="content-area">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'champions-for-progress' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>
