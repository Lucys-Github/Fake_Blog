<?php get_header()
    ?>
<main>
    <h1><?php
    echo 'Archive: ' . get_the_date('F Y');
    ?></h1>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article
                class="vertical-margin-40 vertical-padding-20 flex-container flex-gap-10 flex-column horizontal-padding-40 border-top bg-white">
                <?php
                if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>

                <?php endif; ?>

                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <div class="flex-container flex-gap-10">
                    <p><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a></p>
                    <p><?php the_date() ?></p>
                    <p><?php the_excerpt() ?></p>
                </div>
                <?php the_excerpt() ?>
            </article>

        <?php endwhile; endif ?>
</main>
<?php get_footer() ?>
