<?php

/**
 * Hàm trong PHP
 */

function getStart()
{
  echo "Đây là khóa học PHP & MySQL - ";
  $a = 100;
  echo $a;
}
getStart();
echo "<hr>";

function sum($a, $b)
{
  echo $a + $b;
}
sum(1, 2);
echo "<hr>";

function message($message)
{
  echo $message;
}
message("Hello World!");
