<?php
/**
 * 
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathalie Mota</title>
</head>
<body>
    <header>
		<!-- Section pour afficher le logo du site -->
		<div class="logo">
			<?php
			  // S'il est défini, affiche le logo personnalisé du site
				if (function_exists('the_custom_logo')) {
					the_custom_logo();
				} else {
					echo '<h1>' . get_bloginfo('name') . '</h1>';
				}
			?>
		</div>
		<!-- Navigation principale du site -->
		<nav id="nav-menu" role="navigation">
			<?php
				wp_nav_menu(array(
				'theme_location' =>	'menu-header',
				'container' => false,
				'menu_class' => 'menu',
				));
			?>
		</nav>
    </header>
    <main>
    
