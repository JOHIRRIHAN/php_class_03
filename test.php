<?php
// define 
// define("PI",2.34456);
// echo "value of PI = ".PI;

// dump 

// $name= "Rakibul Islam Suna Miya";
// var_dump($name);
/*
$fName = "Rakib";
$lName = "Hasan";

echo "Full Name is : $fName $lName ";
printf("His Full Name is : {$fName}{$lName}");
*/

// echo "My <br> Name <br> Is <br> Hasin Hayder <br> , How are you?";

// $naumber = 100;
// $naumber1 = 20;
// $number3 = $naumber% $naumber1;
// echo $number3;

// echo "My <br> Name <br> Is <br> Hasin Hayder <br> , How are you?";

// $fName = "Sawon";
// $lName = "Miya";
// $output = sprintf("his name is: %s %s", $fName, $lName);
// echo $output;

// 12 no video 

// $n = 1;
// if($n % 2 == 0){
//     echo "$n is even number";
// }else{
//     echo "$n is odd number";
// }

/*
$m = 2;
$n = 12;
if($m != $n){
    echo "M is not equal N";
}
else{
    echo " equal";
}
*/

// leap year check 

$year = 2012;
if( $year % 4 ==0 && $year % 100 == 0 && $year % 400 == 0){
    echo " $year is leap year";
}
elseif( $year % 4 ==0 && $year % 100 == 0 ){
    echo " $year is leap year";
}
elseif( $year % 4 ==0 ){
    echo " $year is leap year";
}
else{
    echo " $year is not leap year";

}