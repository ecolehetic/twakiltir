<?php
	switch( $_GET['page'] ){
		case 'accueil':
			$file = 'accueil.php';
			$title = 'Blablah blahh';
			break;
		case 'chatons':
			$file = 'chatons.php';
			$title = 'Chatons';
			break;
		case 'anime':
			$file = 'anime.php';
			$title = 'Weee GITS';
			break;
		case 'maxime':
			$file = 'maxime.php';
			$title = 'chouf';
			break;
		case 'jackson':
			$file = 'jackson.php';
			$title = 'incroyable talent';
			break;
		default:
			header( 'Location: index-switch.php?page=accueil' );
			die();
			break;
	}
	// afficher le header
	include( 'header.php' );
	// afficher le contenu
	include( $file );
	// afficher le footer
	include( 'footer.php' );