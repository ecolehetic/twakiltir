<?php
	if(!isset($title)){
		$title = "Le dev est un boulet";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
<div id="header" class="largeur-de-la-balle">Le header</div>
<div id="menu" class="largeur-de-la-balle">
<?php foreach( $les_pages as $page => $definition ): ?>
	<a href="index.php?page=<?php echo $page;?>"><?php echo $definition['menu_title']?></a>
<?php endforeach;?>
</div>
<div id="content" class="largeur-de-la-balle">