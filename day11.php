<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/25
 * Time: 10:24
 */


echo ReverseSentence("student. a am I");

function ReverseSentence($str){
    //把字符串转换成数组
   $arr=explode(' ',$str);
   //利用array_reverse()反转顺序
   $arr1=array_reverse($arr);
   //返回利用implode()转换成的字符串
   return implode(' ',$arr1);
}