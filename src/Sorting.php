<?php

namespace JiJiHoHoCoCo\MyanmarAlphabetSorting;

class Sorting{

	private static $characters=[
		"u1000",
		"u1001",
		"u1002",
		"u1003",
		"u1004",
		"u1005",
		"u1006",
		"u1007",
		"u1008",
		"u1009",
		"u100a",
		"u100b",
		"u100c",
		"u100d",
		"u100e",
		"u100f",
		"u1010",
		"u1011",
		"u1012",
		"u1013",
		"u1014",
		"u1015",
		"u1016",
		"u1017",
		"u1018",
		"u1019",
		"u101a",
		"u101b",
		"u101c",
		"u101d",
		"u101e",
		"u101f",
		"u1020",
		"u1021",
		"u1022",
		"u1023",
		"u1024",
		"u1025",
		"u1026",
		"u1027",
		"u1028",
		"u1029",
		"u102a",
		"u102b",
		"u102c",
		"u102d",
		"u102e",
		"u102f",
		"u1030",
		"u1031",
		"u1032",
		"u1033",
		"u1034",
		"u1035",
		"u1036",
		"u1037",
		"u1038",
		"u1039",
		"u103a",
		"u103b",
		"u103c",
		"u103d",
		"u103e",
		"u103f",
		"u1040",
		"u1041",
		"u1042",
		"u1043",
		"u1044",
		"u1045",
		"u1046",
		"u1047",
		"u1048",
		"u1049",
		"u104a",
		"u104b",
		"u104c",
		"u104d",
		"u104e",
		"u104f",
		"u1050",
		"u1051",
		"u1052",
		"u1053",
		"u1054",
		"u1055",
		"u1056",
		"u1057",
		"u1058",
		"u1059",
		"u105a",
		"u105b",
		"u105c",
		"u105d",
		"u105e",
		"u105f",
		"u1060",
		"u1061",
		"u1062",
		"u1063",
		"u1064",
		"u1065",
		"u1066",
		"u1067",
		"u1068",
		"u1069",
		"u106a",
		"u106b",
		"u106c",
		"u106d",
		"u106e",
		"u106f",
		"u1070",
		"u1071",
		"u1072",
		"u1073",
		"u1074",
		"u1075",
		"u1076",
		"u1077",
		"u1078",
		"u1079",
		"u107a",
		"u107b",
		"u107c",
		"u107d",
		"u107e",
		"u107f",
		"u1080",
		"u1081",
		"u1082",
		"u1083",
		"u1084",
		"u1085",
		"u1086",
		"u1087",
		"u1088",
		"u1089",
		"u108a",
		"u108b",
		"u108c",
		"u108d",
		"u108e",
		"u108f",
		"u1090",
		"u1091",
		"u1092",
		"u1093",
		"u1094",
		"u1095",
		"u1096",
		"u1097",
		"u1098",
		"u1099",
		"u109a",
		"u109b",
		"u109c",
		"u109d",
		"u109e",
		"u109f"];

		private static function check(array $letterArray){
			$arrayNumber=null;
			foreach ($letterArray as $letter) {
				$arrayNumber .= array_search($letter, self::$characters);
			}
			if($arrayNumber!==null){
				return $arrayNumber;
			}
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
				if(isset($letterArray[1])){
					unset($letterArray[0]);
					$arrayNumber=self::check($letterArray);
					if($arrayNumber!==null){
						$result["u".$arrayNumber]=$alphabet;
					}
				}
			}
			return $result;

		}

	}