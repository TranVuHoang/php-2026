<?php
# Toán tử ba ngôi

$age = 29;
$message = ($age >= 18) ? "Bạn đủ tuổi" : "bạn chưa đủ tuổi";
echo $message."<hr />";
$docthan = 1;

if ($age > 18) {
  if($docthan) {
    echo "Chưa cưới vợ";
  } else {
    echo "Đã lấy vợ";
  }
} else {
  echo "Con nít";
}