<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Example: Print the first 10 Fibonacci numbers
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . ' ';
}
?>

