<?php
$var=123456; //Number which you want to reverse.
$rev=0;      //Initializing the variable which is going to hold the reversed number.
$r=0;        // Initializing a variable to store the remainder.
for($i=$var;$i>0;$i=(int)$i/10){
    $r=$i%10;        // Extracting the last digit of the number.
    $rev=$r+$rev*10; // Building the reversed number digit by digit.
}
print("The reverse of $var is : $rev \n"); //Printing the reversed number.
