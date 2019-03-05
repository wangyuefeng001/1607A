<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/3/5
 * Time: 10:22
 */
echo  NumberOf1(10);
function  NumberOf1($n){

for ($i = $n;$i>0;$i--){
    $p= '';
    $p.= ceil($i % 2);
    $i= $i / 2;

   // echo $i.'</br>';
    echo $p;
   }

}