# Chương 1: Tổng quan lập trình PHP - Môi trường

## Bài 1: Bạn sẽ học được những gì ở khóa học này?

Nội dung khoá học:

- PHP căn bản
- MySQL căn bản
  => Thực hành Project: Xây dựng hệ thống CRM tinh gọn bằng PHP & MySQL

- Lập trình hướng đối tượng OOP
- Xây dựng mô hình MVC
  => Thực hành Project: Xây dựng website học onlinr(E-learning)

- AJAX, FILE-FOLDER
- RESTFUL API...

## Bài 2: Tổng quan về lập trình PHP

I. Tổng quan về PHP & MySQL

1. PHP là gì?

```
`PHP` (viết tắt của: Hypertext Preprocessor) là một ngôn ngữ lập trình kịch bản chạy
trên máy chủ, được sử dụng rộng rãi để phát triển các website động.

`PHP` là một trong những ngôn ngữ lập trình web phổ biến và có cộng đồng phát triển
lớn nhất hiện nay.
```

2. Ưu điểm ngôn ngữ lập trình PHP

```
- Mã nguồn mở, miễn phí
  PHP là ngôn ngữ lập trình mã nguồn mở, hoàn toàn miễn phí đẻ sử dụng.
  Không cần mua bản quyền, dễ dàng tải về & cài đặt trên các hệ thống khác nhau.

- Dễ học, dễ sử dụng
  Cú pháp PHP đơn giản và linh hoạt, dễ tiếp cận cho người mới.
  Có nhiều tài liệu hướng dẫn, cộng đồng hỗ trợ lớn.

- Tương thích cao
  PHP có thể chạy trên nhiều hệ điều hành: Windows, Linux, macOS.
  Tích hợp tốt với MySQL, MariaDB, PostgreSQL, MongoDB và nhiều hệ
  quản trị CSDL khác.

- Hiệu suất cao
  Phiên bản mới (PHP 7, PHP 8) tối ưu hiệu suất tốt hơn

- Thư viện & framework mạnh mẽ
  Nhiều framework PHP phổ biến giúp phát triển ứng dụnggnud nhanh hơn:
  Laravel, CodeIgniter, Wordpress...
```

3. Cách PHP hoạt động

```
PHP hoạt động theo mô hình Client - Server

```

## Bài 3: Cài đặt công cụ và môi trường phát triển. (VS Code + Xampp)

```
- Công cụ soạn thoả: PHPStorm, "VS Code", Sublime Text,...
- Web Server (Server ảo) phổ biến nhất để chạy PHP: Apache, Nginx, LiteSpeed,...
```

Apache(phổ biến nhất)

```
- Máy chủ web phổ biến nhất để chạy PHP.
- Dễ cài đặt, cấu hình đơn giản, hỗ trợ module PHP mạnh mẽ.
- Hoạt động tốt trên windows, linux, macOS.
- Dễ dàng cấu hình thông qua .htcaccess.

Cài đặt: "Xampp", Warmpp, Lamp,...
```

Các extensions cho VS Code:

```
PHP Intelephense
PHP Debug
Format HTML in PHP
```

## Bài 4: Thêm project vào Xampp và VSCode

Đưa 1 project vào VScode

## Bài 5: Cú pháp cơ bản trong PHP

II. PHP căn bản

1. Cú pháp PHP cơ bản

```
- Cú pháp <?php và ?>
- Đặt tên file
- echo trong PHP
- print trong PHP
- Cú pháp comment
```

Echo là một lệnh trong PHP dùng để xuất ra một chuỗi(tring) hoặc giá trị từ
một biểu thức. Bạn có thể sử dụng echo để in ra màn hình kết quả trong quá trình
thực thi của chương trình.

Ví dụ sử dụng Echo:

```php
<?php
echo "Chào các bạn!"; // In ra chuỗi "Chào các bạn!"
?>
```

Lưu ý: echo có thể in nhiều tham số cách nhau bằng dấu (,).

```php
<?php
# In ra chuỗi "Hello world! HTML CSS Javascript PHP"
echo "Hello world!", " HTML", " CSS", " Javascript", " PHP";
?>
```

`Print` cũng là một lệnh dùng để xuất dữ liệu ra màn hình, nhưng có sự khác biệt
với `echo`. print có thể được coi là một hàm(function) vì nó luôn trả về giá trị 1.

Ví dụ sử dụng `print`:

```php
<?php
# ví dụ sử dụng print
print("Chào các bạn"); // In ra chuỗi "Chào các bạn!"
print("Hello, PHP"); // In ra chuỗi "Hello, PHP"
?>
```

Lưu ý: print trả về giá trị 1, điều này có thể sử dụng trong các biểu thức
điều kiện:

```php
<?php
if(print("Hello, PHP")) {
  echo "In thành công";
}
?>
```

## Bài 7: Biến (variable) PHP

`2. Biến trong PHP`

```
Biến trong PHP là một vùng nhớ được đặt tên để lưu trữ dữ liệu.
Biến trong PHP bắt đầu bằng ký tự $ theo sau tên biến.
```

Quy tắc đặt tên biến:

```
- Biến bắt đầu bằng ký tự $.
- Chỉ chứa chữ cái, số và dấu gạch dưới(_), không được chứa dấu cách.
- Biến phân biệt chữ hoa và chữ thường ($name khác $Name).
- Không được dùng từ khoá PHP làm tên biến
```

Ví dụ:

```php
$username = "Hoàng Trần";
$email ="hoangtran@gmail.com";
```

## Bài 8: Hằng số trong PHP

` 3. Hằng số trong PHP`

Hằng số là biên đặc biệt có giá trị không thay đổi trong suốt quá trình thực thi.
Không cần dùng $ khi gọi hằng số.

Cách khai báo hằng số:

```php
/# Cách 1: dùng fefine()
define("SITE_NAME", "tranvuhoang.github.io");
echo SITE_NAME; //Output: tranvuhoang.github.io

#Cách 2: dùng const
const _PI = 3.14;
echo _PI; // output: 3.14
```

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

## Bài 12: Các loại Toán tử PHP - Phần 2

`3. Toán tử so sánh (Comparison Operators)`

```
== : bằng nhau về giá trị
===: bằng nhau cả về giá trị và kiểu dữ liệu
!= : khác nhau về giá trị
<> : khác nhau về giá trị
 !==: khác nhau về giá trị lẫn kiểu
 >: lớn hơn
 <: Nhỏ hơn
 >= : lớn hơn hoặc bằng
 <=: Nhỏ hơn hoặc bằng
```
