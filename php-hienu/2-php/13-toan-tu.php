<?php
$a = true;
$b = false;
$c = true;
$d = false;

#Toán tử (&&)
var_dump($a && $b); //bool(false)
echo "<br />";

var_dump($a && $c); //bool(true)
echo "<br />";

var_dump($b && $d); //bool(true)
echo "<br />";

# Toán tử hoặc (||)
var_dump($a || $b); // bool(true)
echo "<br />";

# Toán tử phủ định (!)
var_dump(!$a); // bool(false)
echo "<br />";

# Toán tử tăng giảm ++$a và $a++
$a = 2;
// ++$a;
echo ++$a; // 3
echo "<br />";

++$a;
var_dump($a); // 4
echo "<br/>";

// $b++
$b = 2;
echo $b++; // 2
echo "<br/>";

echo $b; // 3
echo "<br/>";

// --$c
$c = 4;
echo --$c; // 3
echo "<hr/>";
echo $c; // 3