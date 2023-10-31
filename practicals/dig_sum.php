<?php
$var = 1234; // The number whose digits you want to sum
$sum = 0;    // Initializing the variable to store the sum of digits.
// Loop through each digit of the number
for ($i = $var; $i > 0; $i = (int)($i / 10)) {
    $sum += $i % 10; // Extract the last digit and add it to the sum
}
// Print the result.
print("Sum of the digits of $var is : $sum \n");
