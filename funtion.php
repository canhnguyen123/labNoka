<?php 

    function getTotalArr($arr){
        $total=0;
        foreach($arr as $item){
            $total+=$item;
        }
        echo "Tổng giá trị các phần tử là :". $total ."<br>";
    }
    function getMax($arr){
        $maxValue=max($arr);
        echo "Giá  trị lớn nhất là :". $maxValue ."<br>";
    }
    function getMin($arr){
        $minValue=min($arr);
        echo "Giá trị nhỏ nhất là :". $minValue ."<br>";
    }
?>