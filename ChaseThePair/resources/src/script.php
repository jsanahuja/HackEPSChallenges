<?php


function get_chasers($set1, $set2, $target){
	$start = microtime(true);
	for($i = 0; $i < sizeof($set1); $i++){
		if(!isset($min1) || !isset($diff1) || $diff1 > abs($target - $set1[$i])){
			$min1 = $set1[$i];
			$diff1 = abs($target - $set1[$i]);
		}
		if(!isset($min2) || !isset($diff2) || $diff2 > abs($target - $set2[$i])){
			$min2 = $set2[$i];
			$diff2 = abs($target - $set2[$i]);
		}
	}
	return [$min1, $min2, microtime(true) - $start];
}

function parse_file($file){
	if(file_exists($file) && is_readable($file))
		return array_map(
			function($element){
				return array_map("intval", explode(",", $element));
			}, array_values(array_filter(
				preg_split("/([A|B\t\[\]]+)/", file_get_contents($file))
			))
		);
	else
		return false;
}

// Generates a random target if we pass 'random' in the 'chased number' argument.
function random_target($set1, $set2){
	return rand(
		max(min($set1), min($set2)),
		min(max($set1), max($set2))
	);
}

if(!isset($argc) || $argc != 3){
	echo "Usage: php ". $argv[0] ." <input file> <chased number|'random'>". PHP_EOL;
	exit;
}

if(!is_numeric($argv[2]) && $argv[2] != "random"){
	echo "Error: Invalid or non-numeric chased number" . PHP_EOL;
	exit;
}

if(($sets = parse_file($argv[1])) == false){
	echo "Error: Invalid or unreadable input file" . PHP_EOL;
	exit;
}

if(sizeof($sets) != 2 || !sizeof($sets[0]) || !sizeof($sets[1]) || sizeof($sets[0]) != sizeof($sets[1])){
	echo "Error: Invalid or unreadable input file" . PHP_EOL;
	exit;
}

$target = $argv[2] == "random" ? random_target($sets[0], $sets[1]) : $argv[2];

print "==========================================================" . PHP_EOL;
print "Sets size: ". sizeof($sets[0]). " - Chased number: ". $target . PHP_EOL;
$result = get_chasers($sets[0], $sets[1], $target);
print "Result: [" . $result[0] .", ". $result[1]. "]" . PHP_EOL;
print "Time: ". $result[2] . " seconds" . PHP_EOL;
