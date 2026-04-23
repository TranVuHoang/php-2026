<?php
// ví dụ 1
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}

// ví dụ 2
$input = "123";

while ($input != "1234") {
    $input = readline("Nhập mật khẩu: ");
}
?>