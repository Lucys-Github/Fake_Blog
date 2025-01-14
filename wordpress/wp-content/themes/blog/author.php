<?php get_header()
    ?>
<main>
    <h1><?php echo get_the_author(); ?></h1>
	<?php echo do_shortcode('[show-blog-posts]'); ?>


</main>
<?php get_footer() ?>
