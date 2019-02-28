<?php
print_r(FindNumbersWithSum([20,30,40,60,80,100],120));

function FindNumbersWithSum($array, $sum){
	$len=count($array);
	$start=0;
	$end=$len-1;
	$list=[];
	for ($i=0; $i < $len ; $i++) { 
             if($array[$start] + $array[$end] == $sum){
             	$list[]=$array[$start];
             	$list[]=$array[$end];
             	$start++;
             	$end--;
             }
	}
	return $list;
} 