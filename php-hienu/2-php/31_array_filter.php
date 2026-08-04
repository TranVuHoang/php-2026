<?php
$numbers = [1, 3, 5, 6, 7, 1, 9, 33, 45, 89, 4];
$number2 = ["PHP", "Ruby", "Dart"];

$result = array_filter($numbers, function ($number) {
  return $number % 2 == 0;
});

echo "<pre>";
print_r($result);
echo "</pre>";

$result = array_unique($numbers);

echo "<pre>";
print_r($result);
echo "</pre>";

$join = array_merge($numbers, $number2);
echo "<pre>";
print_r($join);
echo "</pre>";