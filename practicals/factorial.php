<?php
$variable = 10; // The number for which factorial is to be calculated

// Function to calculate factorial recursively
function factorial($n) {
    // Base case: factorial of 0 or 1 is 1
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Recursive case: n! = n * (n-1)!
        return $n * factorial($n - 1);
    }
}

// Calculate the factorial of the specified number
$result = factorial($variable);

// Display the result
echo "The factorial of $variable is: $result \n\n";

