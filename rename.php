<?php
require_once 'inc/config.php';

$query = $db->prepare('SELECT name, picture FROM products GROUP BY picture Having picture != "" ORDER BY picture ASC');
$query->execute();
$products = $query->fetchAll();

foreach ($products as $key => $product) {
	// debug($products);

	if (file_exists('img/'.$product['picture'])) {
		$non = array(' ',',');
		$name = str_replace($non, '-', $product['name']);
		$new_name = trim($name);
		$new_name = replace($name).'.jpg';
		debug($product['picture']);
		debug($new_name);
	}
	// rename($product['picture'], 'img/'.$new_name);
}