<?php

/**
 * Hàm isset() và empty() trong PHP
 *
 * 1. Hàm isset(): kiểm tra 1 biến có tồn tại hay k
 * -> trả về true | false
 *
 * 2. Hàm empty(): Kiếm tra biến có rỗng hay không
 */

$a = 10;
var_dump(isset($a)); // bool(true)
echo "<hr>";

var_dump(isset($b)); // bool(false)
echo "<hr>";

if (isset($a)) {
  echo "Thực hiện thao tác vì $a tồn tại.";
} else {
  echo "Biến $a không tồn tại.";
}
echo "<hr>";

// Kiểm tra biến $a có rỗng hay không
if (!empty($a)) {
  echo "Thực hiện thao tác vì $a tồn tại.";
} else {
  echo "Biến $a không tồn tại.";
}
