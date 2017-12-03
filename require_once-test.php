<?php

$total = [];
for ($k = 0; $k < 10000; $k++) { 
	$object = null;
	$start = microtime(true);
	for ($i=0; $i < 15; $i++) { 
		require_once 'src/rtemb/mypackage/exceptions/mypackage.php';
		$object = new Mypackage();
	}
	$end = microtime(true);
	$total[] = $end - $start;
	unset($object);
}

echo "total: " . array_sum($total) / count($total)  . "s\n";
exit;