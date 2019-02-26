<?php
//1．编写一个程序，传入n与m两个参数，生成1~n的编号，从开头的编号开始数，数到m将对应的元素删除，接下来从下一个元素开始数，数到m就删除，求最后剩下的数字
//echo '1．最后剩下的数字:'.sel(15,5).'</br>';

function sel($n,$m){
	$arr=range(1,$n);
	$count=count($arr);
    $k=0;
    $i=0;
    $array=[];
	while ( count($arr) >1) {

	 if(!isset($arr[$i])){
        	$arr=$array;
        	$array=[];
        	$i=0;
        }

		$k++;
		if($k==$m){
			unset($arr[$i]);
			$k=0;
		}else{
            $array[]=$arr[$i];
		}
		$i++;
	}
    return  implode($array);
	

}

//echo '要求将数组分为三组，每组的和尽量相近:';
// print_r(xj([12,32,45,61,74,83,91,24,34]));
// echo '</br>';
function xj($arr){
	rsort($arr);
	$array=[
         [array_shift($arr)],
         [array_shift($arr)],
         [array_shift($arr)],
	];
	$len=count($arr);

	for ($i=0; $i < $len; $i++) { 
		$array[2][]=$arr[$i];
		$sum=array_sum($array[2]);

		if($sum >array_sum($array[0])){
			$array=[
               $array[2],
               $array[0],
               $array[1],
			];
		}else if ($sum >array_sum($array[1])) {
			$array=[
               $array[0],
               $array[2],
               $array[1],
			];
		} 
		
	}
	return $array;
}



echo '返回数组内数字可以组成的最大值：';
print_r(max1([12,32,45,61,74,83,91,24]));
echo '</br>';
function max1($arr,$pow=0){
	$t=[];
	$tt=[];
	for ($i=0; $i < 10 ; $i++) { 
		$t[]=[];
	}

     $array=[];
	$count=count($arr);
 
	for ($k=0; $k <$count ; $k++) { 
		$index=(string)$arr[$k];
		if($index[$pow]){
			$t[$index[$pow]][]=$arr[$k];
		}else{
             $tt[$index[$pow-1]]=$arr[$k];
		}		
		
	}
	
	for ($j=0; $j < 10 ; $j++) { 
		if(count($t[$j]) == 1){
             array_unshift($array,$t[$j]);
		}else if(count($t[$j]) > 1 ){
             max1($t[$j],$pow+1); 
		}

		if($tt){
			$array=array_merge($tt,$array);
		}

	}

return $array;
	
}


echo '用户的平均等待时间:'.yh([9.01, 9.10, 9.20, 9.21, 9.22],[0.30, 0.18, 0.22, 0.47, 0.11]);
echo '</br>';
function yh($active_time,$process_time){
	$gt=[];
     $wait=0;
	$len=count($active_time);

	for ($i=0; $i <$len ; $i++) { 
		if(count($gt)  < 4 ){
			$gt[]=$active_time[$i] + $process_time[$i];
			continue;
		}
		sort($gt);
		$bye=array_shift($gt);

		if($bye > $active_time[$i]){
			$wait +=$bye -$active_time[$i];
			$now= $bye+$process_time[$i];
		}else{
			$now= $active_time[$i]+$process_time[$i];
		}

		$gt[]=$now;
	}

	return $wait / $len;

}
