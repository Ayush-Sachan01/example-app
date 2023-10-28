<?php
$var = 1234;
$sum = 0;

for ($i = $var; $i > 0; $i = (int)($i / 10)) {
    $sum += $i % 10;
}

print("Sum of the digits of $var is : $sum \n");
