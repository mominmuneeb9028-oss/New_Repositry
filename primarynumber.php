<?php
echo "Prime numbers from 1 to 50 are: <br>";

for ($num = 2; $num <= 50; $num++) {
    $isPrime = true;

    // Check if $num is divisible by any number between 2 and sqrt($num)
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}
?>
