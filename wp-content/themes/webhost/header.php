<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
	
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">WebHost</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container'      => false,
								'menu_class'     => 'navbar-nav ml-auto ',
								'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'walker' => new WebHost_Walker_Nav_Primary()
							)
						);
						?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->