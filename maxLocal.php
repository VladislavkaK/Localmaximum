<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.11.2017
 * Time: 15:58
 */
function localMax($arr)
{
   // $str ='';
    $arr2 = [];
    for($j = 1; $j < count($arr)-1; $j++){
        if(($arr[$j] > $arr[$j - 1]) && ($arr[$j] > $arr[$j + 1])){
            $arr2[] = $arr[$j];
          //  $str = implode(" ", $arr2);
        }
    }
    return $arr2;
}