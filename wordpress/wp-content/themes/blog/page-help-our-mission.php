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

<div class="width-20-percent side-margin-60">
<?php
   the_post_thumbnail('medium')
      ?>
      </div>
</main>
<?php get_footer() ?>
