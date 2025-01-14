<?php get_header()
?>

<div class="side-margin-60">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    the_post_thumbnail('medium');
    
        the_title('<h1>', '</h1>');

        the_content();

        echo '<p>Posted on ' . get_the_date() . ' by ' . get_the_author() . '</p>';

        comments_template();
    endwhile;
endif; ?>
</div>

<?php get_footer() ?>
