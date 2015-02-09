<?php
class Helpers{
	
	public static function random_str(){
	    $alphabet = "0123456789";
	    $pass = array(); 
	    $length = 4;
	    $alphaLength = strlen($alphabet) - 1; 
	    for ($i = 0; $i < $length; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return floatval(implode($pass)); //turn the array into a string
	
	}

	public static function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
		$sort_col = array();
		foreach ($arr as $key=> $row) {
		    $sort_col[$key] = $row[$col];
		}

		array_multisort($sort_col, $dir, $arr);
	}
}

function app_path(){
	return 'C:\xampp\htdocs\otaku';
}
