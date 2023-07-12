<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <nav>
        <div class="logo">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
        ?>
        </div>
        <?php
      
      wp_nav_menu(
        array(
          // 'header-menu' => 'theme-menu', 
          'menu' => 'header',
          'menu_id' => 'navigation' ,
          'menu_class' => 'list'
        )
      );
      ?>
      
      </nav>
      <div id="component-newsrails">
        <h2>teste</h2>
      </div>
     
    </header>





     <!-- <div id="navigation">
        <nav>
          <h1 class='logo'>Logo</h1>
          <a href="#">Carreira</a>
          <a href="#">Industria</a>
          <a href="#">Comercio</a>
          <a href="#">Agro</a>
          <a href="#">Cursos</a>
        </nav>
      </div>
      <div id="component-newsrails">
        a
      </div> -->