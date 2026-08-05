<?php

/**
 * #32. Các hàm xử lý mảng trong PHP f4
 * 1. Hàm explode($delimiter, $string): Tách chuối thành mảng
 * 2. Hàm implode($delimiter, $array): Gộp mảng thành chuỗi
 */

$message = "Học lập trình PHP, Hoàng";
$array1 = explode(" ", $message);

echo "<pre>";
print_r($array1);
echo "</pre>";

#2. gộp mảng thành chuỗi
$array = ["học", "lập", "trình"];
$array2 = implode(" ", $array);

echo "<pre>";
print_r($array2);
echo "</pre>";
