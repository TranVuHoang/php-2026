# Chương 2: Lập trình PHP cơ bản

## Bài 6: Lưu ý khi viết code PHP

Kết thúc mỗi dòng code phải có dấu (;) để kết thúc dòng code

## Bài 9: Kiểu dữ liệu trong PHP - Phần 1

```
+ Kiểu chuỗi (string): là một dãy ký tự được đặt trong dấu nháy đơn (' ') hoặc nháy kép (" ")

+ Sự khác nhau giữa nháy đơn và nháy kép:

" " hỗ trợ nội suy biến ($variable bên trong sẽ được thay thế bằng giá trị thực).
' ' không hỗ trợ nội suy biến, hiển thị nguyên văn bản.
```

## Bài 10: Kiểu dữ liệu trong PHP - Phần 2

- Kiểu số nguyên (Integer)
  Số nguyên trong PHP là số không có phần thập phân.

Hàm var_dump(): là một hàm trong PHP dùng để xuất thông tin chi tiết về một biến

- Kiểu số thực (Float hoặc Double): Là số có phần thập phân hoặc số mũ.

- Kiểu Boolean (true/ false)
  - Chỉ có hai giá trị: true hoặc false. Dùng trong kiểm tra điều kiện.
  - Các giá trị sau đây được coi là false: false, 0 hoặc "0", ""(chuỗi rỗng), NULL
    [] (mảng rỗng)
    | NULL: là một biến không có giá trị hợp lệ.

- Kiểu Mảng (Array): Mảng là tập hợp của nhiều giá trị.
  Có 3 lại mảng trong PHP:
- Mảng chỉ mục số (intexed array)
- Mảng kết hợp (associative array)
- Mảng đa chiều (multidimensional array)

## Bài 11: Các loại Toán tử PHP - Phần 1

`5. Toán tử trong PHP`

Toán tử trong PHP là các ký hiệu hoặc từ khoá dùng để thực hiện phép toán trên
biến và giá trị.

PHP hỗ trợ 5 nhóm toán tử chính:

```
1. Toán tử số học (arthmetic operators)
2. Toán tử gán (Assigment Operators)
3. Toán tử so sánh (Comparison Operators)
4. Toán tử logic (Logical Operators)
5. Toán tử tăng/ giảm (Increment/Decrement Operators)
```

`1. Toán tử số học`

Dùng để thực hiện các phép toán cơ bản: +, -, x, /, %

ví dụ:

```php
<?php
  $a = 10;
  $b = 4;
  echo $a + $b; // 14
?>
```
