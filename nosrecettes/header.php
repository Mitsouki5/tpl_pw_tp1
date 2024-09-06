<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/styles/main.css" />

    <script>
      // À décommenter lorsque rendu dans le fichier .php pour que les icônes fonctionnent dans WP
      iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url') ?>/dist/scripts/main.js" defer></script>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="wrapper">
        <nav>
          <div class="logo"><a href="index.html">NosRecettes</a></div>
          <ul class="nav__menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Les recettes</a></li>
            <li><a href="#">Contactez-nous</a></li>
          </ul>
        </nav>
      </div>
    </header>