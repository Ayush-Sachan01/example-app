<?php

class Practical {
    // Function to print "Hello World"
    public static function printHello() {
        echo "Hello World\n";
    }

    // Function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Function to generate the Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        // Check for invalid input
        if ($n <= 0) {
            return "Invalid Input. Please enter a positive integer\n";
        } elseif ($n == 1) {
            // Base case: Fibonacci sequence with one element
            return [0];
        } elseif ($n == 2) {
            // Base case: Fibonacci sequence with two elements
            return [0, 1];
        } else {
            // Generate Fibonacci sequence for n > 2
            $series = [0, 1];
            for ($i = 2; $i < $n; $i++) {
                $series[$i] = $series[$i - 1] + $series[$i - 2];
            }
            return $series;
        }
    }
}

// Example usage
Practical::printHello();

$sum = Practical::add(1, 3);
echo "Sum is $sum \n";

$n = 20;// no. of elements in fibonacci sequence
$fibonacciSequence = Practical::generateFibonacciSequence($n);
echo "Fibonacci sequence (first $n elements): " . implode(', ', $fibonacciSequence) . "\n";
?>
