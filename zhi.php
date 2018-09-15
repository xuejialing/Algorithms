<?php

/*
	之字形打印二维数组
	1  2  3  4
	5  6  7  8
	9  10 11 12
	
	=> 1 2 5 9 6 3 4 7 10 11 8 12
*/

function zhiFunc($arr){
	//游走坐标，对角线方向
	//上边&右边路线
	$AR = 0;
	$AC = 0;
	//左边&下面路线
	$BR = 0;
	$BC = 0;
	$direction = false;
	
	//边界值
	$edgeC = count($arr[0])-1;
	$edgeR = count($arr)-1;

	
	// 判断到最后的右下角 条件： 

	while($AR != $edgeR+1){
		diagonal($arr, $AR, $AC, $BR, $BC, $direction);

		//AR 开始不变，在右上角开始+1
		$AR = $AC == $edgeC ? $AR+1 : $AR;
		//AC 开始+1  ，在右上角开始不变
		$AC = $AC == $edgeC ? $AC : $AC+1;
		//BC 开始不变， 在左下脚开始+1  
		$BC = $BR == $edgeR ? $BC+1 : $BC;
		//BR 开始+1， 在左下角开始不变
		$BR = $BR == $edgeR ? $BR : $BR+1;

		$direction = !$direction;
	}
}

function diagonal($arr, $AR, $AC, $BR, $BC, $direction){

	if($direction){
		while($AR != $BR+1){
			echo $arr[$AR++][$AC--]." ";
		}
	}else{
		while($BR != $AR-1){
			echo $arr[$BR--][$BC++]." ";
		}
	}
}
$arr = array(
	array(1,2,3,4),
	array(5,6,7,8),
	array(9,10,11,12)
);
zhiFunc($arr);





?>

