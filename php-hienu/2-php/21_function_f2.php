<?php

/**
 * Hàm có giá trị trả về(return)
 */
function calculator($a, $b)
{
  return $a * $b;
}
$result = calculator(2, 4);
echo $result;
echo "<hr>";

// Truyền tham chiếu
function calculator2(&$a, &$b)
{
  $a += 10;
  $b += 5;
}

$a = 3;
$b = 4;
calculator2($a, $b);
echo $a;
echo "<br>";
echo $b;