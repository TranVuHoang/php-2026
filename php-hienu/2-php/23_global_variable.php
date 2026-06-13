<?php

/**
 * Biến toàn cục và biến cục bộ
 *
 * 1. Biến toàn cục
 * - Khai báo bên ngoài và sử dụng ở bất kỳ đâu.
 * - Nhưng nếu trong hàm thì cần phải global trước tên biến.
 *
 * 2. Biến cục bộ
 * - Dùng trong 1 hàm hoặc trong 1 khối lệnh(block scope)
 */
$name = "Hoàng";
echo $name;

$getName = function () {
  global $name;
  echo $name;
};
$getName();
echo "<hr>";

function getAll()
{
  static $a = 10;
  $a++;
  echo $a;
}
getAll(); // 11
getAll(); // 12
getAll(); // 13