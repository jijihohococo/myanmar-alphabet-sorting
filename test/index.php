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

$multiDimensionalArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13']
];

$ascendingMultiDimensioanlArray=[
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကေကေ',"age"=>'12']
];

$descendingMultiDimensioanlArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'14']
];

$duplicatedMultiDimensionalArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20']
];

$ascendingDuplicatedMultiDimensionalArray=[
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကေကေ',"age"=>'12']
];

$descendingDuplicatedMultiDimensionalArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကီကီ','age'=>'14']
];




if($ascendingSortedArray==Sorting::ascendingOrder($array)){
	echo "Testing Myanmar alphabet sorting in ascending order is passed.\n";
}

if($descendingSortedArray==Sorting::descendingOrder($array)){
	echo "Testing Myanmar alphabet sorting in descending order is passed.\n";
}

if($ascendingMultiDimensioanlArray==Sorting::ascendingMulti($multiDimensionalArray,'name')){
echo "Testing Myanmar alphabet sorting by field name in multi dimensioanl array in ascending order is passed.\n";
}

if($descendingMultiDimensioanlArray==Sorting::descendingMulti($multiDimensionalArray,'name')){
echo "Testing Myanmar alphabet sorting by field name in multi dimensioanl array in descending order is passed.\n";
}

if($ascendingDuplicatedMultiDimensionalArray==Sorting::ascendingMulti($duplicatedMultiDimensionalArray,'name')){
echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensioanl array in ascending order is passed.\n";
}

if($descendingDuplicatedMultiDimensionalArray==Sorting::descendingMulti($duplicatedMultiDimensionalArray,'name')){
echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensioanl array in descending order is passed.\n";

}

