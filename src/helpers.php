<?php

function changeMMNumber($string){

	$engNumber   = ["1", "2", "3" , "4" ,"5" ,"6" ,"7" ,"8" ,"9", "0"];
	$mmNumber = ["၁","၂","၃","၄","၅","၆","၇","၈","၉","၀"];
	return  str_replace($engNumber, $mmNumber, $string);
}

function convertCodeToCharacter($letter){
	return json_decode('"'.'\\' . $letter .'"');
}

function convertCharacterToCodeArray($alphabet){
	return explode('\\', substr(json_encode($alphabet), 1,-1) );
}

function checkUnique(array $dataArray){
	return $dataArray!==array_unique($dataArray);
}

function makeDataArray(array $multiArray,$key){
	$dataArray=[];
	foreach ($multiArray as $value) {
		$dataArray[]=$value[$key];
	}
	return $dataArray;
}