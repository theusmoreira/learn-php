<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}

$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as $color) {
    echo $color . '<br>';
}

while (true) {
    echo 'Hello World' . '<br>';
    break;
}

/// map and filter
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$evenNumbers = array_filter($numbers, function ($number) {
    return $number % 2 === 0;
});

$doubleNumbers = array_map(function ($number) {
    return $number * 2;
}, $numbers);

var_dump($evenNumbers);
var_dump($doubleNumbers);
?>
