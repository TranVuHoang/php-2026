<?php

/**
 * Các hàm xử lý mảng
 *
 * #1. count($array): Đếm số luợng phần tử trong mảng
 * #2. in_array($value, $array): Kiểm tra $value có tồn tại trong mảng k
 * #3. array_keys($array): lấy ra key của mảng $array
 * #4. array_values($array): lấy ra value của mảng $array
 * #5. sort($array): trả về mảng đã được sắp xếp tăng dần
 * #6. rsort($array): trả về mảng đã được sắp giảm dần
 * #7. array_push($array, $value): trả về mảng được thêm $value vào cuối mảng
 * #8. array_pop($array): xoá phần tử cuối mảng.
 */

//------------------------------------------------
// #1. hàm count()
//------------------------------------------------
$array = ["PHP", "Ruby", "Dart", "NodeJS"];
echo count($array); // 3
echo "<hr>";

//------------------------------------------------
// #2. in_array()
//------------------------------------------------
echo in_array("PHP1", $array);

//------------------------------------------------
// #3. array_keys()
//------------------------------------------------
$keys = array_keys($array);
echo "<pre>";
print_r($keys);
echo "</pre>";

foreach ($keys as $key) {
  echo $key . " ";
}
echo "<hr>";

//------------------------------------------------
// #4. array_values()
//------------------------------------------------
$values = array_values($array);
echo "<pre>";
print_r($values);
echo "</pre>";

foreach ($values as $value) {
  echo $value . " ";
}

//------------------------------------------------
// # 5. sort()
//------------------------------------------------
$numbers = [1, 6, 2, 3, 8, 7, 9, 4, 5];
sort($numbers);

echo "<hr>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

foreach ($numbers as $number) {
  echo $number . " ";
}

//------------------------------------------------
// # 6. rsort()
//------------------------------------------------
rsort($numbers);
echo "<hr>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

foreach ($numbers as $number) {
  echo $number . " ";
}

//------------------------------------------------
// # 7. array_push($array)
//------------------------------------------------
$languages = ["PHP", "Ruby"];
echo "<hr>";
echo "<pre>";
print_r($languages);
echo "</pre>";

array_push($languages, "React");
echo "<pre>";
print_r($languages);
echo "</pre>";

$languages[2] = "HTML";
echo "<pre>";
print_r($languages);
echo "</pre>";

$languages[3] = "CSS";
echo "<pre>";
print_r($languages);
echo "</pre>";

//------------------------------------------------
// # 8. array_pop($array)
//------------------------------------------------
echo "<hr>";
array_pop($languages);
echo "<pre>";
print_r($languages);
echo "</pre>";

//------------------------------------------------
// # 9. array_unshi($array, $value)
//------------------------------------------------
$numbers = [1, 2, 3, 4, 5];
// thêm 1 phần tử vào đầu của mảng
array_unshift($numbers, 0);
echo "<hr>";
echo "<pre>";
print_r($numbers);
echo "</pre>";
