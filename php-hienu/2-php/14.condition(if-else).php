<?php
# Câu lệnh if
$age = 29;

if ($age >= 18) {
  echo "Thoả mãn điều kiện <br />";
}
echo "Bên dưới <br />";
echo "<hr />";

# Câu lệnh if else
$hoang = 29;

if ($hoang > 10) {
  echo "Thoả mãn điều kiện";
} else {
  echo "Không thoả mãn điều kiện";
}

echo "<hr />";

if ($hoang < 10) {
  echo "Thoả mãn điều kiện";
} else {
  echo "Không thoả mãn điều kiện";
}

echo "<hr/>";
/**
 * Kiểm tra học lực
 * Học sinh giỏi: (8 -10)
 * Học sinh khá: (7-8)
 * Học sinh trung bình: (5-7)
 * Học sinh yếu: <5
 */
$point = 5.9;

if ($point < 5) {
  echo "Học lực yếu";
} elseif ($point < 7) {
  echo "Học lực trung bình";
} elseif ($point < 8) {
  echo "Học lực khá";
} elseif ($point <= 10) {
  echo "Học lực giỏi";
}