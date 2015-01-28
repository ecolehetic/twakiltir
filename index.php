<?php
	// declaration des pages
	$les_pages = array();
	$les_pages['accueil'] = array(
		'file' => 'accueil.php' ,
		'menu_title' => 'Accueil',
		'title' => 'J\'aime les accueils'
	);
	$les_pages['anime'] = array(
		'file' => 'anime.php' ,
		'menu_title' => 'Animemememe',
		'title' => 'J\'aime les anime!'
	);
	$les_pages['chatons'] = array(
		'file' => 'chatons.php' ,
		'menu_title' => 'Petits chats',
		'title' => 'J\'aime les chatons!'
	);
	$les_pages['teletubbies'] = array(
		'file' => 'teletubbies.php' ,
		'menu_title' => 'Teletubbies',
		'title' => 'Tinky winky, Lala, Po, Dipsy!'
	);
	if( isset( $_GET['page'] ) && isset( $les_pages[$_GET['page']] )) {
		$page_courante = $_GET['page'];
	} else {
		header( 'Location: index.php?page=accueil' );
		die();
	}
	$title = $les_pages[$page_courante]['title'];
	// afficher le header
	include( 'header.php' );
	// afficher le contenu
	include( $les_pages[$page_courante]['file'] );
	// afficher le footer
	include( 'footer.php' );
