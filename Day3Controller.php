<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/15
 * Time: 10:21
 */

namespace frontend\controllers;


use yii\base\Controller;

class Day3Controller  extends  Controller
{
    function actionTest(){
        echo "循环调用";
       print_r($this->xh(10));
       echo "</br>";
       echo "递归调用";
       echo $this->actionDg(10);
    }
    //调用递归实现裴波那契数
    public function actionDg($n){
        if($n==1 ||$n == 2)
        {
            return 1;
        }else{
            //调用自身
            return  $this->actionDg($n-1)+ $this->actionDg($n-2);
        }

    }
    //调用循环实现裴波那契数
    function xh($n){
        $arr=[];
        for($i=0;$i<$n;$i++){
            if($i==0 || $i==1){
                $arr[$i]=1;
            }else{
                $arr[$i]=$arr[$i-1]+$arr[$i-2];
            }
        }
        return $arr;
    }

}