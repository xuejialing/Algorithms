<?php

function myfunc($arr){
	//长度
	$l = count($arr);
	$lp = 0;
	$rp = $l/2+1;
	for($i=0;$i<($l/2);$i++){
		//如果是奇数就++,如果是偶数就++ 并且跟后一半交换
		//设置两个pointer，左右各一个
		if($arr[$i]%2 == 1){
			$lp++;
		}else{
			while($arr[$i]%2 == 0){
				list($arr[$i],$arr[$rp]) = array($arr[$rp],$arr[$i]);
				$rp++;
			}
			$lp++;
		}
	}
	return $arr;
}

$arr = array(1,2,3,4,5,6,7,8,9,10);
$newArr = myfunc($arr);

print_r($newArr);

//时间复杂度 O(n)
//空间复杂度 O(1)

//返回：Array ( [0] => 1 [1] => 7 [2] => 3 [3] => 9 [4] => 5 [5] => 6 [6] => 2 [7] => 4 [8] => 8 [9] => 10 ) 
?>
