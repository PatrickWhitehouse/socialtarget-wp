<?php get_header(); ?>
    <div class="container mx-auto">
        <?php if ( have_posts() ) : ?>
            <div class="cards blog-cards">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article class="card">
                    <a href="<?php the_permalink(); ?>" class="flex flex-col h-full justify-between">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </a>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
            </div>

        <?php endif; ?>

    </div>

<?php
get_footer();
