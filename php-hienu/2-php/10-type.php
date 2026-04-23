<?php
# kiểu dữ liệu số nguyên - Integer
$bien1 = 5;

# kiểu dữ liệu số thực - Float
$bien2 = 3.7;
echo "<br />";
var_dump($bien2); // float(3.70000000000000017763568394002504646778106689453125)

# kiểu dữ liệu boolean
$bien3 = true;
echo "<br />";
var_dump($bien3); // bool(true)

echo "<br />";
echo $bien3; // 1

$bien4 = false;
echo "<br />";
var_dump($bien4); // bool(false)
echo "<br />";
echo $bien4; // không trả về gì cả

# Kiểu mảng
$mang = ["PHP", "Laravel", "Học lập trình"];

// in mảng bằng var_dump
echo "<pre>";
var_dump($mang);
echo "</pre>";

// in mảng bằng print_r
echo "<pre>";
print_r($mang);
echo "</pre>";

// in ra phần tử trong mảng
echo "<br />";
echo $mang[0]; // PHP