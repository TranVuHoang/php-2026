<?php

/**
 * Mảng(Array)
 * -> 3 loại mảng
 *
 * 1. Mảng chỉ mục: index-value; index bắt đầu từ số 0
 * 2. Mảng kết hợp: key - value
 * 3. Mảng đa chiều
 */

//------------------------------------------------------
// #1. Mảng chỉ mục
//------------------------------------------------------
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

//------------------------------------------------------
// #2. Mảng kết hợp
//------------------------------------------------------
$cars = [
  "toyota" => "Vios, Camry",
  "kia" => "morning, selto",
  "hyndai" => "cetafe, tucson",
  "vinfast" => "VF3, VF5, VF6, VF7, VF8, VF9"
];
echo $cars["kia"];
echo "<hr>";

echo $cars["vinfast"];
echo "<hr>";

echo "<pre>";
print_r($cars);
echo "</pre>";

// duyệt mảng
$i = 1;
foreach ($cars as $key => $car) {
  echo "$i. $key: $car <br />";
  $i++;
}


//------------------------------------------------------
// #3. Mảng đa chiều
//------------------------------------------------------
$brands = [
  "toyota"  => ["vios", "camry", "fortuner"],
  "kia"     => ["morning", "selto"],
  "huyndai" => ["cetafe", "tucson"],
  "vinfast" => ["VF3", "VF5", "VF6", "VF7", "VF8", "VF9"],
];
echo "<pre>";
print_r($brands);
echo "</pre>";

echo $brands["toyota"][0];

// duyệt mảng đa chiều
foreach ($brands as $key => $brand) {
  echo "Hãng xe <strong>$key</strong> gồm: ";
  foreach ($brand as $index => $item) {
    echo $item . " ";
  }
  echo "<br>";
}
