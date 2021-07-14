<?php

require_once($_SERVER['DOCUMENT_ROOT']. '/src/Sorting.php' );

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

foreach ($array as $value) {
	echo $value . ',';
}

echo '<br>';
echo '<br>';

foreach(Sorting::sort($array) as $sort){
	echo $sort . ',';
}