<?php
# Toán tử gán =
$number1 = 9;
$number2 = 2;

# tổng
echo $number1 + $number2; // 11

# chia lấy số dư
echo "<br />";
echo $number1 % $number2; // 1

# luỹ thừa
echo "<br />";
echo $number1 ** $number2; // 9^2 = 81

# tăng giảm
$a = 2;
$b = 4;

$a = $a + 2; // $a = 2 + 2 = 4
$a += 2; // $a = 4 + 2 = 6
echo "<br />";
echo $a; // 6

$b -= 1;
echo "<br />";
echo $b; // 3

$b *= 2;
echo "<br />";
echo $b; // 6

$b /= 2;
echo "<br />";
echo $b; // 3