<?php

require_once 'vendor/autoload.php';
$total = [];
for ($k = 0; $k < 10000; $k++) { 
	$object = null;
	$start = microtime(true);
	$object = new Mypackage();
	$end = microtime(true);
	$total[] = $end - $start;
	unset($object);
}

echo "total: " . array_sum($total) / count($total)  . "s\n";
exit;