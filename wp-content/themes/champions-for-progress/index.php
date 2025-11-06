<?php
/**
 * The main template file
 *
 * @package Champions_For_Progress
 */

get_header(); ?>

<div class="site-content">
    <div class="site-container">
        <main class="content-area">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <?php
                                printf(
                                    '<span class="posted-on">%s</span>',
                                    get_the_date()
                                );
                                ?>
                            </div>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                        </footer>
                    </article>
                    <?php
                endwhile;

                the_posts_pagination();
            else :
                ?>
                <p>No content found.</p>
                <?php
            endif;
            ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>
