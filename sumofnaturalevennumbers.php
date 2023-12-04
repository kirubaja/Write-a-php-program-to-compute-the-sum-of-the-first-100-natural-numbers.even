<?php
function findSum($n) {
    $sum = 0;
    for ($i = 2; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}

for ($n = 2; $n <= 100; $n += 2) {
    echo "Sum of even numbers up to natural numbers $n: " . findSum($n) . "<br>";
}
?>
