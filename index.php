<?php

require 'app/start.php';

$pages = $db->query("
		SELECT id, label, slug
		FROM pages
	")->fetchAll(PDO::FETCH_ASSOC);

//var_dump($pages);

require VIEW_ROOT . '/home.php';

?>