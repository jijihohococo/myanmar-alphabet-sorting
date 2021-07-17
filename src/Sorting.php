<?php

namespace JiJiHoHoCoCo\MyanmarAlphabetSorting;

class Sorting{

	private static function check(array $letterArray){
		$arrayNumber=null;
		foreach ($letterArray as $letter) {
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