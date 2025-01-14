<?php get_header()
    ?>
<main class="flex-container align-space-between">

    <aside class="width-20-percent">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'secondary-menu',
            'container' => 'nav',
            'container_aria_label' => 'secondary navigation',
            'container_class' => 'padding-20 right-margin  align-self-start bg-white border-top',
            'menu_id' => 'secondary-menu-ul'
        ));
        ?>
    </aside>
    <article class="width-80-percent page-content">
    <h1>Events</h1>
        <?php
        echo do_shortcode('[my_calendar weekends="true"]');
        ?>
    </article>
</main>
<?php get_footer() ?>
