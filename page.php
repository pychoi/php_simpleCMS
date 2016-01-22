<?php

require 'app/start.php';  //this file contains db connection and global variables

if(empty($_GET['page'])){
	$page = false;
} else {
	// Grab page
	//var_dump($_GET);
	$slug = $_GET['page'];

	$page = $db->prepare("
		SELECT * 
		FROM pages 
		WHERE slug = :slug
	");	

	$page->execute(['slug' => $slug]);

	$page = $page->fetch(PDO::FETCH_ASSOC);

	if ($page){
		$page['created'] = new DateTime($page['created']);

		if($page['updated']){
			$page['updated'] = new DateTime($page['updated']);
		}
	}

	// var_dump($page);
}

require VIEW_ROOT . '/page/show.php';