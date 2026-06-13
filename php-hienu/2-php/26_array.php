<?php

/**
 * Mảng(Array)
 * -> 3 loại mảng
 *
 * 1. Mảng chỉ mục: index-value; index bắt đầu từ số 0
 * 2. Mảng kết hợp
 * 3. Mảng đa chiều
 */

// Mảng chỉ mục
$numbers = [1, 2, 3, 4, 5];
echo "<pre>";
print_r($numbers);
echo "</pre>";

$cars = ["VF7", "CX5", "Camry", "VF3"];
echo "<pre>";
print_r($cars);
echo "</pre>";

echo $cars[2]; // Camry
echo "<hr>";

// Duyệt mảng chỉ mục(mảng 1 chiều)
foreach ($cars as $index => $car) {
  echo $index + 1 . ". " . $car . "<br />";
}
