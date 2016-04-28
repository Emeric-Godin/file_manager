<?php
require_once 'inc/config.php';

$contents = nl2br(file_get_contents('text.txt'));
$contents = explode('<br />'.PHP_EOL.'<br />'.PHP_EOL, $contents);

debug($contents);