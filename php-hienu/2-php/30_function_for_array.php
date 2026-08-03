<?php

/**
 * Hàm xử lý mảng phần 2
 * hàm array_unshift($array, $value);
 * => thêm $value vào đầu của mảng $array
 *
 */
$numbers = [1, 2, 4, 6, 7, 5, 3, 8];

array_unshift($numbers, 1000);
echo "<pre>";
print_r($numbers);
echo "</pre>";
