<?php get_header()
	?>
<main class="flex-container flex-gap-30">
	<section>
	<h1>FLOG (Flat Earth blOG)</h1>
	<?php echo do_shortcode('[show-blog-posts]'); ?>
	</section>
    <aside id="secondary" class="widget-area vertical-padding-20 horizontal-padding-40 align-self-start bg-white border">
        <?php dynamic_sidebar( 'side-menu-widget' ); ?>
		</aside>
</main>
<?php get_footer() ?>
