<?php

function findSmallestValue($numbers){
    $smallestValue = $numbers[0];
    print_r($smallestValue."\n");
    for ($j=0; $j < count($numbers); $j++) { 
        echo $numbers[$j].",";
        if($numbers[$j] < $smallestValue){
            $smallestValue = $numbers[$j];
        }
    }
    echo "the smallest number is ".$smallestValue;
}

findSmallestValue([12,35354,67,7,9,1,76]);

//inbuild method
echo(min(1,4,6,8,10) . "<br>");

