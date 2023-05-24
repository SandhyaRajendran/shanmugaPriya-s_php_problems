<?php

function biggestNumber($value){
    $findedBigValue = $value[0];
    // print_r($findedBigValue."\n");
    for ($k=0; $k < count($value) ; $k++) { 
        // print_r($k);
//23>23
//
        if($value[$k] > $findedBigValue){
            $findedBigValue = $value[$k];
        }
    }
    echo "the biggest number is ".$findedBigValue;
}
biggestNumber([23,56,87,91,23,7]);


//inbuild Function
echo(max(2,4,6,8,10) . "<br>");
