<?php

namespace JiJiHoHoCoCo\MyanmarAlphabetSorting;


$autoload = __DIR__.'/../vendor/autoload.php';
if (!file_exists($autoload))
{
	exit("Need Composer!");
}
require $autoload;
require_once  __DIR__.'/../src/helpers.php';

use SteveNay\MyanFont\MyanFont;

class Sorting{

	private static function check(array $letterArray){
		$arrayNumber=null;
		foreach(array_chunk($letterArray,10,true) as $letterChunk){
			foreach($letterChunk  as $letter){
				$arrayNumber .= $letter;
			}
		}
		if($arrayNumber!==null){
			return $arrayNumber;
		}
	}

	private static function checkZawgyi(array $letterArray){
		$arrayNumber=null;
		foreach (array_chunk($letterArray,10,true) as $letterChunk) {
			foreach($letterChunk as $letter){
				switch($letter){
					case 'u1033':
					$letter="u102f";
					break;

					case "u1034":
					$letter="u1030";
					break;

					case 'u1039':
					$letter='u103a';
					break;

					case 'u103a':
					$letter='u103b';
					break;

					case 'u103b':
					$letter='u103c';
					break;

					case 'u103c':
					$letter='u103d';
					break;

					case 'u103d':
					$letter='u103e';
					break;

					case 'u104e':
					$letter="u104e" . "u1004"."u1039"."u1038";
					break;

					case 'u105a':
					$letter="u102b" . "u103a";
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
					$letter='u1004'.'u103a'.'u1039';
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

					case 'u106a':
					$letter='u1009' . 'u1039';
					break;

					case 'u106b':
					$letter='u100a' . 'u1039';
					break;

					case 'u106c':
					$letter='u1039' . 'u100b';
					break;

					case 'u106d':
					$letter='u1039' . 'u100c';
					break;

					case 'u106e':
					$letter='u100b'.'u1039'.'u100b';
					break;

					case 'u106f':
					$letter='u100d' . 'u1039' . 'u100e';
					break;


					case 'u1070':
					$letter='u1039' . 'u100f';
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

					case 'u107a':
					$letter='u1039' . 'u1017';
					break;

					case 'u107b':
					case 'u1093':
					$letter='u1039' . 'u1018';
					break;

					case 'u107c':
					$letter='u1039' . 'u1019';
					break;

					case 'u107d':
					$letter='u1039' . 'u103b';
					break;


					case 'u107e':
					case 'u107f':
					case 'u1080':
					case 'u1081':
					case 'u1082':
					case 'u1083':
					case 'u1084':
					$letter='u103b';
					break;

					case 'u1085':
					$letter='u1039'.'u101c';
					break;

					case 'u1086':
					$letter="u103f";
					break;

					case 'u1087':
					$letter='u103e';
					break;

					case 'u1088':
					$letter='u103e'.'u102f';
					break;

					case 'u1089':
					$letter='u103e'.'u1030';
					break;

					case 'u108a':
					$letter="u103c" . "u103d";
					break;

					case 'u108b':
					$letter='u1004'.'u103a'.'u1039'.'u102d';
					break;

					case 'u108c':
					$letter='u1004'.'u103a'.'u1039'.'u102e';
					break;

					case 'u108d':
					$letter='u1004' . 'u103a' . 'u1039' . 'u1036';
					break;

					case 'u108e':
					$letter='u102d' . 'u1036';
					break;

					case 'u108f':
					$letter='u1014'. 'u1039';
					break;

					case 'u1090':
					$letter='u101b' . 'u1039';
					break;

					case 'u1091':
					$letter='u100f'. 'u1039' . 'u100d';
					break;

					case 'u1092':
					$letter='u100b' . 'u1039' . 'u100c';
					break;

					case 'u1094':
					case 'u1095':
					$letter='u1037';
					break;

					case 'u1096':
					$letter='u1039' . 'u1010' . 'u103d';
					break;

					case 'u1097':
					$letter='u100b' . 'u1039';
					break;
				}
				$arrayNumber .= $letter;
			}
		}
		if($arrayNumber!==null){
			return $arrayNumber;
		}
	}

	public static function ascendingMulti(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'ascendingOrder');
	}

	public static function descendingMulti(array $multiArray,$key){
		return self::multiSort($multiArray,$key,'descendingOrder');
	}

	private static function multiSort(array $multiArray,$key,$method){
		$arrayNumber=$result=$arrayCountValue=$changedArray=$originalArray=[];
		$dataArray=makeDataArray($multiArray,$key);
		
		
		if(checkUnique($dataArray) ){
			
			foreach(array_chunk(array_count_values($dataArray),10,true) as $valueChunk){
				foreach($valueChunk as $dKey => $value){
					if($value>1){
						$arrayCountValue[$dKey]=$value;
					}
				}
			}
			foreach(array_chunk($arrayCountValue,10,true) as $cChunk){
				foreach($cChunk as $cKey =>  $cValue){
					foreach(array_chunk(range(1,$cValue),10,true) as $rangeChunk){
						foreach($rangeChunk as  $rangeValue){
							$changedData=' -'.changeMMNumber($rangeValue);
							$multiArray[array_search($cKey, array_column($multiArray, $key ))][$key]=$cKey . $changedData;
							$originalArray[]=$cKey;
							$changedArray[]=$changedData;
						}
					}
				}
			}
			$dataArray=makeDataArray($multiArray,$key);
		}

		$newData=self::{$method}($dataArray);
		
		foreach(array_chunk($newData, 10,true)  as $newChunk ){
			foreach($newChunk as $k => $data){
				$arrayNumber[]=array_search($data, array_column($multiArray, $key));
			}
		}

		foreach(array_chunk($multiArray,10,true) as $multiArrayChunk){
			foreach($multiArrayChunk as $dataKey => $d){
				$multiData=$multiArray[$arrayNumber[$dataKey]];
				if(!empty($arrayCountValue) ){
					foreach(array_chunk($changedArray, 10,true)  as  $changedArrayChunk  ){
						foreach ($changedArrayChunk as $changedKey => $changed ) {
							if(strpos($multiData[$key], $changed )==TRUE){
								$changedString=$originalArray[$changedKey] . $changed;
								$multiData[$key]=substr($changedString, 0, strpos($changedString, $changed ));
							}
						}
					}
				}
				$result[]=$multiData;
			}
		}

		return $result;
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
		foreach(array_chunk($alphabets,10,true) as $chunkAlphabet){
			foreach($chunkAlphabet as $key  => $alphabet){
				$letterArray=convertCharacterToCodeArray($alphabet);

				if( isset($letterArray[0]) ){
					if(isset($letterArray[1])){
						unset($letterArray[0]);
					}
					$arrayNumber=MyanFont::fontDetectByRegularExpression($alphabet)=="Zawgyi"? self::checkZawgyi($letterArray) : self::check($letterArray);
					if($arrayNumber!==null){
						$result[$arrayNumber.$key]=$alphabet;
					}
				}
			}
		}
		return $result;

	}

}