<?php


echo FirstNotRepeatingChar('iiodjfjksdcjekdvslawsdmccjsm');

function FirstNotRepeatingChar($str){

	$len=strlen($str);
    $arr=[];
 
	for ($i=0; $i <$len ; $i++) {
           $str1='';
		if(substr_count($str,$str[$i]) <=1){
            $arr[]=$str[$i];
		
		}
		
		
	 }
 
	echo $arr[0];
	
}