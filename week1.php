<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/18
 * Time: 8:38
 */
//第一题：
echo sxh(123,999);
echo '</br>';
//封装sxh方法
function sxh($n,$m){
    //循环从$n 到$m 之间的数字
    for ($i=$n;$i<$m;$i++){
        //如果最小数小于三位数 则停止运行
        if(strlen($n)<3){
            return false;
        }
        //得出百位数
        $b=floor($i/100);
        //得出十位数
        $s=floor($i%100/10);
        //得出个位数
        $g=$i%10;
         //$sum=百位*百位*百位+十位*十位*十位 +个位*个位*个位
       $sum=$b*$b*$b + $s*$s*$s + $g*$g*$g;
        //判断是否于$sum相等   如果相等就是水仙花
       if($i == $sum){
           echo $i.'<br>';
       }
    }

}


//第二题：
 save('hello world').'</br>';
function save($str){
    for ($i=0;$i<count($str);$i++){

    }

}


//第三题：
echo  hw('123321').'</br>';
function hw($str){
    $arr='';
    for ($i=strlen($str)-1;$i>=0;$i--){
        $arr.=$str[$i];


    }
    for ($i=strlen($str)-1;$i>0;$i--){
        if($arr[$i] !=$str[$i]){
            return '不是回文字符串';
        }
    }
    return '回文字符串';


}


//第四题
print_r(pb(10));
echo '</br>';
function pb($n){
  $arr=[];
  for ($i=1;$i<=10;$i++){
      if($i ==1 || $i ==2){
         $arr[$i]= 1;
      }else{
          $arr[$i]=$arr[$i-1]+$arr[$i-2];
      }
  }
  return $arr;
}

//第五题
echo zm(26).'</br>';
function zm($n){
    $arr= range('a','z');
    $len=count($arr);
    $list=[];
    $tmp=floor($n/$len);
    $rem=$n%$len;
    if($rem == 0 ){
        $tmp --;
        array_unshift($list,$arr[$len-1]);
    }else{
        array_unshift($list,$arr[$rem-1]);
    }
  return implode($list);
}


//第六题
print_r(tj(10));
function tj($n){
    $m='';
    for ($i=1;$i<=$n;$i++){
        if($i ==1 || $i ==2){
            $arr[$i]= 1;
        }else{
            $arr[$i]=$arr[$i-1]+$arr[$i-2];
        }
    }
    asort($arr);
    return $arr[$n];
}



