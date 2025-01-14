<?php get_header()
?>
<main>
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>

    <?php if ( have_posts() ) : ?>
        <ul>
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p>
                        <?php
                            $search_term = get_search_query();
                            the_content();
                        ?>
                    </p>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="pagination">
            <?php
                // Pagination links for the search results
                the_posts_pagination();
            ?>
        </div>

    <?php else : ?>
        <p>No results found for: <?php echo get_search_query(); ?></p>
    <?php endif; ?>
    </main>
<?php get_footer() ?>
