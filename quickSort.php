<?php
//快排
$arr = array(12,45,32,76,93,52,48);

function quickSort($arr){
	if(!is_array($arr)) return false;
	if(count($arr) <= 1) return $arr;
	
	$len = count($arr);
	$leftArr = $rightArr = array();
	for($i=1;$i<$len;$i++){
		if($arr[$i]<$arr[0]){
			$leftArr[] = $arr[$i];
		}else{
			$rightArr[] = $arr[$i];
		}
	}
	$leftArr = quickSort($leftArr);
	$rightArr = quickSort($rightArr);
	
	return array_merge($leftArr,array($arr[0]),$rightArr);
}

print_r(quickSort($arr));