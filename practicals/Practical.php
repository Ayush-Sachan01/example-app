<?php

class Practical {
    // Function to print "Hello World"
    public static function printHello() {
        echo "Hello World\n";
    }

    // Function to add two numbers
    public static function add($num1, $num2) {
        if(!is_numeric($num1)||!is_numeric($num2)){
            throw new \InvalidArgumentException("Try again and enter a numeric value.\n");
        }
        return $num1 + $num2;
    }

    // Function to generate the Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        if(!is_int($n)){
            throw new \InvalidArgumentException("Invalid Argument, Enter an Interger\n");
        }

        // Check for invalid input
        if ($n <= 0) {
            throw new \InvalidArgumentException("Invalid Input. Please enter a positive integer\n");
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

$sum = Practical::add(1,2);
echo "Sum is $sum \n";

$n = 20;// no. of elements in fibonacci sequence
$fibonacciSequence = Practical::generateFibonacciSequence($n);
echo "Fibonacci sequence (first $n elements): " . implode(', ', $fibonacciSequence) . "\n";
?>
