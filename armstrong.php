<?php
$number = 153; // You can change the number here
$sum = 0;
$temp = $number;

$digits = strlen((string)$number); // Count the number of digits

while ($temp != 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $digits); // Raise each digit to the power of total digits
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
