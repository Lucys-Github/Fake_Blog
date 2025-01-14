<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flat Facts</title>
  <?php wp_head() ?>
</head>

<body>

  <header>
    <div class="bg-blue vertical-padding-20">
      <div class="side-margin-60">
        <div class="flex-container justify-space-between">
          <h1 class="color-white">Flat Facts</h1>
          <?php get_search_form() ?>
        </div>
      </div>
    </div>
    </div>

    <div class="bg-black vertical-padding-10">
      <?php
      wp_nav_menu(array(
        'menu' => 'Primary Menu',
        'container' => 'nav',
        'container_aria_label' => 'top navigation',
        'container_class' => 'side-margin-60',
        'menu_class' => 'flex-container flex-gap-10',
        'menu_id' => 'nav-menu-ul'
      ));
      ?>
    </div>
  </header>
