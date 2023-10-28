<?php
$var=123456;
$sum=0;
$r=0;
for($i=$var;$i>0;$i=(int)$i/10){
    $r=$i%10;
    $sum=$r+$sum*10;
}
print("The reverse of $var is : $sum \n");
