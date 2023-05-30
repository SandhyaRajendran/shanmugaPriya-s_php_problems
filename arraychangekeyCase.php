<?php

// ============================array change key case to upper and lower ==============================

//syntax
//array_change_key_case(array, case)

//array voda key ah matum upper case ah matum
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// print_r(array_change_key_case($age,CASE_UPPER));

// output///
// Array
// (
//     [PETER] => 35
//     [BEN] => 37
//     [JOE] => 43
// )

// $name = ["name1"=>"sandhya","name2"=>"siva","name3"=>"shivam",];
// print_r(array_change_key_case($name,CASE_UPPER));
// echo(array_change_key_case($name,CASE_UPPER)); //IT SHOWS ERROR BECUSE THIS ARRAY 
//HAVE MULTIPLE VALUE SO WE NNED TO USE print_r

//Array
// (
//     [NAME1] => sandhya
//     [NAME2] => siva
//     [NAME3] => shivam
// )

// ======================ARRY KEY LOWER CASE==========================================================
//array voda key ah matum LOWER case ah matum

// $name = ["NAME1"=>"sandhya","NAME2"=>"siva","NAME3"=>"shivam",];
// print_r(array_change_key_case($name,CASE_LOWER));

// =======================================================================================================

//ithula  B = dog and inoru b vanthu bird nu iruku anal uppercase ah atum bothuu rendavahu irukarthu 
// first mela overwrite agidum apo output vanthu B = bird matum tha execute agum
$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));
// Array
// (
//     [A] => Cat
//     [B] => Bird
//     [C] => Horse
// )


