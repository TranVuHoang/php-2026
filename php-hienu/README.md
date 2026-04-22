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

## Bài 4: Thêm project vào Xampp và VSCode (Visual Studio Code)

Đưa 1 project vào VScode

## Bài 5: Cú pháp cơ bản trong PHP
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
