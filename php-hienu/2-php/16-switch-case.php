<?php
$day = 5;

switch ($day) {
    case 1:
        echo "Thứ Hai";
        break;
    case 2:
        echo "Thứ Ba";
        break;
    case 3:
        echo "Thứ Tư";
        break;
    case 4:
        echo "Thứ Năm";
        break;
    case 5:
        echo "Thứ Sáu";
        break;
    case 6:
        echo "Thứ Bảy";
        break;
    case 7:
        echo "Chủ Nhật";
        break;
    default:
        echo "Ngày không hợp lệ";
}
echo "<hr />";

// Lấy ngày hiện tại (1 = Monday, 7 = Sunday)
$day = date("N");

switch ($day) {
    case 1:
        $result = "Hôm nay là Thứ Hai";
        break;
    case 2:
        $result = "Hôm nay là Thứ Ba";
        break;
    case 3:
        $result = "Hôm nay là Thứ Tư";
        break;
    case 4:
        $result = "Hôm nay là Thứ Năm";
        break;
    case 5:
        $result = "Hôm nay là Thứ Sáu";
        break;
    case 6:
        $result = "Hôm nay là Thứ Bảy";
        break;
    case 7:
        $result = "Hôm nay là Chủ Nhật";
        break;
    default:
        $result = "Không xác định";
}

echo $result;

echo "<hr />";
?>

<?php
$day = date("N");

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Ngày làm việc";
        break;
    case 6:
    case 7:
        echo "Cuối tuần";
        break;
}
?>