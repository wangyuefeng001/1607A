<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/3/6
 * Time: 10:22
 */
echo find2(9);
//第一种方法
function find($n){
    $arr=[1,3,5,7,9,2,4,6,8,25];
   foreach ($arr as $k =>$v){
       if($v == $n){
           return  $k;
       }else{
           continue;
       }
   }
}
function find2($n,$i=0){
    $arr=[1,3,5,7,9,2,4,6,8,25];
    if($arr[$i] != $n){
        find2($n,$i+1);
    }else{
        echo   $i;
    }

}