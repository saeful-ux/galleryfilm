<?php
	$pdo = new PDO("mysql:host=localhost;dbname=imdb", 'root', '');
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

	$uresult = $pdo->query("DELETE * FROM film WHERE film_id = '"+$id+"'");
	
?>