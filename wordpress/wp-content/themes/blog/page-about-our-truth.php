<?php get_header()
    ?>

<main class="flex-container align-space-between">
<article class="width-80-percent page-content">
<h1><?php
    the_title();
?>
</h1>
<?php
    the_content();
?>
</article>

<aside class="width-20-percent">
<?php
      wp_nav_menu(array(
        'theme_location' => 'secondary-menu',
        'container' => 'nav',
        'container_aria_label' => 'secondary navigation',
        'container_class' => 'padding-20  align-self-start bg-white border-top',
        'menu_id' => 'secondary-menu-ul'
      ));
      ?>
      </aside>
</main>
<?php get_footer() ?>
