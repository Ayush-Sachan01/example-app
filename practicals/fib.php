<?php
// Function to calculate the nth Fibonacci number recursively
function fibonacci($n) {
    // Base cases: Fibonacci of 0 or 1 is the number itself
    if ($n <= 1) {
        return $n;
    } else {
        // Recursive case: Fibonacci(n) = Fibonacci(n-1) + Fibonacci(n-2)
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$x=10; //Number of terms in fibonacci series
// Example: Print the first x Fibonacci numbers
for ($i = 0; $i < $x; $i++) {
    echo fibonacci($i) . ' '; // Output each Fibonacci number separated by space
}

