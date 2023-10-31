<?php
//Two numbers which are supposed to be swapped
echo"Numbers:\n";
$A=12;
$B=13;
echo"A=$A\n B=$B \n";
//Swap operation without using an extra temp variable:
$A=$A+$B;
$B=$A-$B;
$A=$A-$B;

//Printing the result:
echo "Swapped result:\n";
echo"A=$A\n B=$B\n";
