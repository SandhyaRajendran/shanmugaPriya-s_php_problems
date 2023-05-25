<?php

//find duplicates


// $arr = array( 
//     'unique', 
//     'duplicate', 
//     'distinct', 
//     'justone', 
//     'three3', 
//     'duplicate', 
//     'three3', 
//     'three3', 
//     'onlyone' 
// );

// $unique = array_unique($arr); 
// $dupes = array_diff_key( $arr, $unique ); 
//     // array( 5=>'duplicate', 6=>'three3' 7=>'three3' )

// // count duplicates

// array_count_values($dupes); // array( 'duplicate'=>1, 'three3'=>2 )

// print_r($unique);
// print_r($dupes);

// $numbers = [1,3,4,5,6,2,5,7,1,1,3,4,5,6,2,5,7,1,1,3,4,5];
// $unique_numbers = [];

// foreach($numbers as $number)
// {
//   if(!in_array($number,$unique_numbers)){
//       $unique_numbers[] = $number;
//   }
// }
// print(json_encode($unique_numbers)); //// Array is now 1,3,4,5,6,2,7, ....

$arr1 = [1,1,2,3,4,5,6,3,1,3,5,3,20];    
print_r(arr_unique($arr1));


function arr_unique($arr) {
    //first sort will asending the numbers 5,3,1 to 1,3,5
  sort($arr);
  //1,1,1,2,3,3, => output
//   print_r($arr);
  //here we took any one value for comparing
  $curr = $arr[0];
  // here in $uni have the pushed value of first value 1 because after make the array as assending 
  // it have the first value as 1
  //here 1 will be stored
  $uni_arr[] = $arr[0];
//   print_r($uni_arr); //1
  for($i=0; $i<count($arr);$i++){
    // 1 =? 1
    //uniarr nu oru array la ellathayum push respected value ah push panum
      if($curr != $arr[$i]) {
        $uni_arr[] = $arr[$i];
        $curr = $arr[$i];
      }
  }
  return $uni_arr;
}

function uniq($arrrVal){
    // echo "before";
    // print_r($arrrVal);
    // echo "after";
    sort($arrrVal);
    // print_r($arrrVal);
    $forComparing = $arrrVal[0];
    // print_r($forComparing."\n");
    $output[] = $arrrVal[0]; 
    for ($i=0; $i < count($arrrVal); $i++) { 
        # code...
        // print_r($arrrVal[$i]."\n");
        if($forComparing != $arrrVal[$i]){
            $output[] =$arrrVal[$i];
            $forComparing = $arrrVal[$i];
        }
    }

    // echo "output";
    // print_r($output);
}
uniq([1,23,45,7,78,9,3,45,2,3]);


$a = array(1,2,3,1,3,4,5);
$count = count($a);
$b = [];
for($i=0; $i<$count; $i++){
    if(!in_array($a[$i], $b)){
        array_push($b, $a[$i]);
    }
}
// print_r ($b);

$val = array(1,1,2,3,4,9,4,1,3,1);
$opVal = [];
for ($k=0; $k < count($val); $k++) { 
    # code...
    print_r($val[$k]);                                              

    if(!in_array($val[$k],$opVal)){
        array_push($opVal,$val[$k]);
    }
}
echo "current output";
print_r($opVal);