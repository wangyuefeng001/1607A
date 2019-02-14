<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/14
 * Time: 8:38
 */
sxh(9,0);
function sxh($m,$n){

    for($i=1;$i<$m;$i++){
        for($j=0;$j<$m;$j++){
            for ($g=0;$g<$m;$g++){
                if($i*$i*$i + $j*$j*$j + $g*$g*$g == 100 * $i+ 10*$j + 1*$g){
                    echo "$i $j $g" ."</br>";
                }
            }
        }
    }
}