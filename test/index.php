<?php

require_once  __DIR__.'/../src/Sorting.php';

use JiJiHoHoCoCo\MyanmarAlphabetSorting\Sorting;

$array=[ "က",
"ကား",
"ကိ",
"ကီ",
"ကေ",
"ကု",
"ကူ",
"ကူး",
"ကာ"];

$ascendingSortedArray=[
"က","ကာ","ကား","ကိ","ကီ","ကု","ကူ","ကူး","ကေ"
];


$descendingSortedArray=[
"ကေ","ကူး","ကူ","ကု","ကီ","ကိ","ကား","ကာ","က"
];


if($ascendingSortedArray==Sorting::ascendingOrder($array)){
	echo "Testing Myanmar alphabet sorting in ascending order is passed.\n";
}

if($descendingSortedArray==Sorting::descendingOrder($array)){
	echo "Testing Myanmar alphabet sorting in descending order is passed.\n";
}

