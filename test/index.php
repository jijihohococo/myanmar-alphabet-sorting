<?php

require_once  __DIR__.'/../src/Sorting.php';

use JiJiHoHoCoCo\MyanmarAlphabetSorting\Sorting;

$error = false;

$array = [ "က",
"ကား",
"ကိ",
"ကီ",
"ကေ",
"ကု",
"ကူ",
"ကူး",
"က",
"ကာ"];

$zawgyiArray = [ "က",
"ကား",
"ကိ",
"ကီ",
"ေက",
"ကု",
"ကူ",
"ကူး",
"က",
"ကာ"];

$ascendingSortedArray = [
"က","က","ကာ","ကား","ကိ","ကီ","ကု","ကူ","ကူး","ကေ"
];

$ascendingSortedZawgyiArray = [
"က","က","ကာ","ကား","ကိ","ကီ","ကု","ကူ","ကူး","ေက"
];

$descendingSortedArray = [
"ကေ","ကူး","ကူ","ကု","ကီ","ကိ","ကား","ကာ","က","က"
];

$descendingSortedZawgyiArray = [
"ေက","ကူး","ကူ","ကု","ကီ","ကိ","ကား","ကာ","က","က"
];

$multiDimensionalArray = [
['name'=>'ကေကေ','age'=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13']
];

$multiDimensionalZawgyiArray = [
['name'=>'ေကေက','age'=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13']
];

$ascendingMultiDimensionalArray = [
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကေကေ',"age"=>'12']
];

$ascendingMultiDimensionalZawgyiArray = [
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ေကေက',"age"=>'12']
];

$descendingMultiDimensionalArray = [
['name'=>'ကေကေ','age'=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'14']
];

$descendingMultiDimensionalZawgyiArray = [
['name'=>'ေကေက','age'=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'14']
];

$duplicatedMultiDimensionalArray = [
['name'=>'ကေကေ','age'=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20']
];

$duplicatedMultiDimensionalZawgyiArray = [
['name'=>'ေကေက','age'=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20']
];

$ascendingDuplicatedMultiDimensionalArray = [
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကေကေ',"age"=>'12']
];

$ascendingDuplicatedMultiDimensionalZawgyiArray = [
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ေကေက',"age"=>'12']
];

$descendingDuplicatedMultiDimensionalArray = [
['name'=>'ကေကေ','age'=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကီကီ','age'=>'14']
];

$descendingDuplicatedMultiDimensionalZawgyiArray = [
['name'=>'ေကေက','age'=>'12'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20'],
['name'=>'ကီကီ','age'=>'14']
];

if( $ascendingSortedArray == Sorting::ascendingOrder($array) ){
	echo "Testing Myanmar alphabet sorting in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting in ascending order is not passed.\n";
	$error = true;
}

if ( $ascendingSortedZawgyiArray == Sorting::ascendingOrder($zawgyiArray) ){
	echo "Testing Myanmar alphabet sorting with zawgyi font in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font in ascending order is not passed.\n";
	$error = true;
}

if( $descendingSortedArray == Sorting::descendingOrder($array) ){
	echo "Testing Myanmar alphabet sorting in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting in descending order is not passed.\n";
	$error = true;
}

if ( $descendingSortedZawgyiArray == Sorting::descendingOrder($zawgyiArray) ){
	echo "Testing Myanmar alphabet sorting with zawgyi font in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font in descending order is not passed.\n";
	$error = true;
}

if($ascendingMultiDimensionalArray == Sorting::ascendingMulti($multiDimensionalArray,'name')){
	echo "Testing Myanmar alphabet sorting by field name in multi dimensional array in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting by field name in multi dimensional array in ascending order is not passed.\n";
	$error = true;
}

if($ascendingMultiDimensionalZawgyiArray == Sorting::ascendingMulti($multiDimensionalZawgyiArray,'name')){
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in multi dimensional array in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in multi dimensional array in ascending order is not passed.\n";
	$error = true;
}

if($descendingMultiDimensionalArray == Sorting::descendingMulti($multiDimensionalArray,'name')){
	echo "Testing Myanmar alphabet sorting by field name in multi dimensional array in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting by field name in multi dimensional array in descending order is not passed.\n";
	$error = true;
}

if($descendingMultiDimensionalZawgyiArray == Sorting::descendingMulti($multiDimensionalZawgyiArray,'name')){
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in multi dimensional array in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in multi dimensional array in descending order is not passed.\n";
	$error = true;
}

if($ascendingDuplicatedMultiDimensionalArray == Sorting::ascendingMulti($duplicatedMultiDimensionalArray,'name')){
	echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensional array in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensional array in ascending order is not passed.\n";
	$error = true;
}

if($ascendingDuplicatedMultiDimensionalZawgyiArray == Sorting::ascendingMulti($duplicatedMultiDimensionalZawgyiArray,'name')){
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in duplicated value in multi dimensional array in ascending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in duplicated value in multi dimensional array in ascending order is not passed.\n";
	$error = true;
}

if($descendingDuplicatedMultiDimensionalArray == Sorting::descendingMulti($duplicatedMultiDimensionalArray,'name')){
	echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensional array in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting by field name in duplicated value in multi dimensional array in descending order is not passed.\n";
	$error = true;
}

if($descendingDuplicatedMultiDimensionalZawgyiArray == Sorting::descendingMulti($duplicatedMultiDimensionalZawgyiArray,'name')){
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in duplicated value in multi dimensional array in descending order is passed.\n";
} else {
	echo "Testing Myanmar alphabet sorting with zawgyi font by field name in duplicated value in multi dimensional array in descending order is not passed.\n";
	$error = true;
}

if ( !$error ) {
	exit(0);
}
exit(1);
