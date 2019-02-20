<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/20
 * Time: 10:22
 */

//调用cs（）方法
echo cs(25);

//定义cs（）方法来实现
function cs($n){
    //用$number代替$n;
    $number=$n;
    //$number用来循环%2 如果余数为0 则用$number/2 把商赋给$number
    while($number % 2 == 0){
            $number = $number/2;
    }
    //$number用来循环%3如果余数为0 则用$number/3 把商赋给$number
    while($number % 3 == 0){
        $number = $number/3;
    }
    //$number用来循环%5如果余数为0 则用$number/5 把商赋给$number
    while($number % 5 == 0){
        $number = $number/5;
    }
   //判断$number 除以 2，3，5的商是否等于一  如果是等于一则是丑数  返回给数字
     if($number == 1){
        return $n.'是丑数';
     }else{
        //$number 除以 2，3，5的商不等于一  返回‘不是丑数’
        return $n.'不是丑数';
     }

}