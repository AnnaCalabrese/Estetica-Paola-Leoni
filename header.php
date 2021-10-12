<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <nav>
      <div>
        <a class="logo" href="<?php echo site_url()?>"><h1>Estetica di paola leoni</h1></a>
      </div>
      <svg class="hamburger-btn" viewBox="0 0 100 80" width="30" height="30">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
      </svg>
       <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="ul-list">%3$s</ul>'
                )
            );

            ?>
  </nav>

  <main>
      <div class="main-container" style="background-image: url(<?php echo get_theme_file_uri('/img/est1.jpg')?>;">
        <div class="main-content">
          <h1>la pelle di una persona è lo specchio della sua vita</h1>
          <br />
          <a href="<?php echo site_url('/contatti')?>"
            ><button class="button btn cta">prenota adesso</button></a
          >
        </div>
      </div>
    </main>