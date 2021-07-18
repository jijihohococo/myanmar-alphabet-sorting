<?php

namespace JiJiHoHoCoCo\MyanmarAlphabetSorting;

class Sorting{

	private static $zawgyi=false;

	private static function check(array $letterArray){
		$arrayNumber=null;
		foreach ($letterArray as $letter) {
			if(self::$zawgyi==true){
				switch($letter){
					case 'u1033':
					$letter="u102F";
					break;

					case "u1034":
					$letter="u1030";
					break;

					case 'u1039':
					$letter='u103A';
					break;

					case 'u103A':
					$letter='u103B';
					break;

					case 'u103B':
					$letter='u103C';
					break;

					case 'u103C':
					$letter='u103D';
					break;

					case 'u103D':
					$letter='u103E';
					break;

					case 'u104E':
					$letter="u104E" . "u1004"."u1039"."u1038";
					break;

					case 'u105A':
					$letter="u102B" . "u103A";
					break;

					case 'u1060':
					$letter='u1039'.'u1000';
					break;

					case 'u1061':
					$letter='u1039' . 'u1001';
					break;

					case 'u1062':
					$letter='u1039' . 'u1002';
					break;

					case 'u1063':
					$letter='u1039' . 'u1003';
					break;

					case 'u1064':
					$letter='u1004'.'u103A'.'u1039';
					break;

					case 'u1065':
					$letter='u1039' . 'u1005';
					break;

					case 'u1066':
					case 'u1067':
					$letter='u1039' . 'u1006';
					break;

					case 'u1068':
					$letter='u1039' . 'u1007';
					break;

					case 'u1069':
					$letter='u1039' . 'u1008';
					break;

					case 'u106A':
					$letter='u1009' . 'u1039';
					break;

					case 'u106B':
					$letter='u100A' . 'u1039';
					break;

					case 'u106C':
					$letter='u1039' . 'u100B';
					break;

					case 'u106D':
					$letter='u1039' . 'u100C';
					break;

					case 'u106E':
					$letter='u100B'.'u1039'.'u100B';
					break;

					case 'u106F':
					$letter='u100D' . 'u1039' . 'u100E';
					break;


					case 'u1070':
					$letter='u1039' . 'u100F';
					break;

					case 'u1071':
					case 'u1072':
					$letter='u1039' . 'u1010';
					break;

					case 'u1073':
					case 'u1074':
					$letter='u1039' . 'u1011';
					break;

					case 'u1075':
					$letter='u1039' . 'u1012';
					break;

					case 'u1076':
					$letter='u1039' . 'u1013';
					break;

					case 'u1077':
					$letter='u1039' . 'u1014';
					break;

					case 'u1078':
					$letter='u1039' . 'u1015';
					break;

					case 'u1079':
					$letter='u1039' . 'u1016';
					break;

					case 'u107A':
					$letter='u1039' . 'u1017';
					break;

					case 'u107B':
					case 'u1093':
					$letter='u1039' . 'u1018';
					break;

					case 'u107C':
					$letter='u1039' . 'u1019';
					break;

					case 'u107D':
					$letter='u1039' . 'u103B';
					break;


					case 'u107E':
					case 'u107F':
					case 'u1080':
					case 'u1081':
					case 'u1082':
					case 'u1083':
					case 'u1084':
					$letter='u103B';
					break;

					case 'u1085':
					$letter='u1039'.'u101C';
					break;

					case 'u1086':
					$letter="u103F";
					break;

					case 'u1087':
					$letter='u103E';
					break;

					case 'u1088':
					$letter='u103E'.'u102F';
					break;

					case 'u1089':
					$letter='u103E'.'u1030';
					break;

					case 'u108A':
					$letter="u103C" . "u103D";
					break;

					case 'u108B':
					$letter='u1004'.'u103A'.'u1039'.'u102D';
					break;

					case 'u108C':
					$letter='u1004'.'u103A'.'u1039'.'u102E';
					break;

					case 'u108D':
					$letter='u1004' . 'u103A' . 'u1039' . 'u1036';
					break;

					case 'u108E':
					$letter='u102D' . 'u1036';
					break;

					case 'u108F':
					$letter='u1014'. 'u1039';
					break;

					case 'u1090':
					$letter='u101B' . 'u1039';
					break;

					case 'u1091':
					$letter='u100F'. 'u1039' . 'u100D';
					break;

					case 'u1092':
					$letter='u100B' . 'u1039' . 'u100C';
					break;

					case 'u1094':
					case 'u1095':
					$letter='u1037';
					break;

					case 'u1096':
					$letter='u1039' . 'u1010' . 'u103D';
					break;

					case 'u1097':
					$letter='u100B' . 'u1039';
					break;

				}
			}
			$arrayNumber .= $letter;
		}
		if($arrayNumber!==null){
			return $arrayNumber;
		}
	}

	private static function changeMMNumber($string){

		$engNumber   = ["1", "2", "3" , "4" ,"5" ,"6" ,"7" ,"8" ,"9", "0"];
		$mmNumber = ["၁","၂","၃","၄","၅","၆","၇","၈","၉","၀"];
		return  str_replace($engNumber, $mmNumber, $string);
	}

	private static function makeDataArray(array $multiArray,$key){
		$dataArray=[];
		foreach ($multiArray as $value) {
			$dataArray[]=$value[$key];
		}
		return $dataArray;
	}

	public static function ascendingMultiZawgyi(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'ascendingOrderZawgyi');
	}

	public static function descendingMultiZawgyi(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'descendingOrderZawgyi');
	}

	public static function ascendingMulti(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'ascendingOrder');
	}

	public static function descendingMulti(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'descendingOrder');
	}

	private static function checkUnique(array $dataArray){
		return $dataArray!==array_unique($dataArray);
	}

	private static function multiSort(array $multiArray,$key,$method){
		$arrayNumber=$result=$arrayCountValue=$changedArray=$originalArray=[];
		$dataArray=self::makeDataArray($multiArray,$key);
		
		
		if(self::checkUnique($dataArray) ){
			
			foreach(array_count_values($dataArray) as  $dKey => $value){
				if($value>1){
					$arrayCountValue[$dKey]=$value;
				}
			}
			foreach($arrayCountValue as $cKey => $cValue){
				foreach(range(1,$cValue) as $rangeValue){
					$changedData=' -'.self::changeMMNumber($rangeValue);
					$multiArray[array_search($cKey, array_column($multiArray, $key ))][$key]=$cKey . $changedData;
					$originalArray[]=$cKey;
					$changedArray[]=$changedData;
				}
			}
			$dataArray=self::makeDataArray($multiArray,$key);
		}

		$newData=self::{$method}($dataArray);
		
		foreach($newData as $k => $data){
			$arrayNumber[]=array_search($data, array_column($multiArray, $key));
		}
		foreach($multiArray as $dataKey => $d){
			$multiData=$multiArray[$arrayNumber[$dataKey]];
			if(!empty($arrayCountValue) ){
				foreach ($changedArray as $changedKey => $changed ) {
					if(strpos($multiData[$key], $changed )==TRUE){
						$changedString=$originalArray[$changedKey] . $changed;
						$multiData[$key]=substr($changedString, 0, strpos($changedString, $changed ));
					}
				}
			}
			$result[]=$multiData;
		}

		return $result;
	}

	public static function ascendingOrderZawgyi(array $alphabets){
		self::$zawgyi=true;
		$resultArray=self::sort($alphabets);
		ksort($resultArray);
		return array_values($resultArray);
	}

	public static function descendingOrderZawgyi(array $alphabets){
		self::$zawgyi=true;
		$resultArray=self::sort($alphabets);
		krsort($resultArray);
		return array_values($resultArray);
	}

	public static function ascendingOrder(array $alphabets){
		$resultArray=self::sort($alphabets);
		ksort($resultArray);
		return array_values($resultArray);
	}

	public static function descendingOrder(array $alphabets){
		$resultArray=self::sort($alphabets);
		krsort($resultArray);
		return array_values($resultArray);
	}

	private static function sort(array $alphabets) {
		$result=[];
		foreach($alphabets as $key => $alphabet){
			$letterArray=explode('\\', substr(json_encode($alphabet), 1,-1) );
			if( isset($letterArray[0]) ){
				if(isset($letterArray[1])){
					unset($letterArray[0]);
				}
				$arrayNumber=self::check($letterArray);
				if($arrayNumber!==null){
					$result[$arrayNumber.$key]=$alphabet;
				}
			}
		}
		return $result;

	}

}