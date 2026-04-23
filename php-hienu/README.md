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

## Bài 13: Các loại toán tử PHP - Phần 3

`4. Toán tử logic (Logical Operators)`
Dùng để kết hợp các điều kiện logic

<table border="1" cellpadding="1px" cellspacing="0">
  <thead>
    <tr>
      <th>Toán tử</th>
      <th>Mô tả</th>
      <th>Ví dụ</th>
      <th>Kết qủa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>&& hoặc AND</td>
      <td>Cả hai điều kiện đều đúng</td>
      <td>(5 > 3) && (10 >5)</td>
      <td>true</td>
    </tr>
    <tr>
      <td>`</td>
      <td></td>
      <td>hoặc OR</td>
      <td>Ít nhất 1 điều kiện đúng</td>
    </tr>
    <tr>
      <td>!</td>
      <td>Phủ định đảo ngược giá trị Boolean</td>
      <td>!(5 > 3)</td>
      <td>false</td>
    </tr>
    <tr>
      <td>XOR</td>
      <td>Một trong hai điều kiện đúng, nhưng không cả hai</td>
      <td>(true XOR false)</td>
      <td>true</td>
    </tr>
  </tbody>
</table>

` 5. Toán tử tăng/ giảm (Increment/Decrement)`

<table border="1" cellpadding="1px" cellspacing="0">
      <thead>
        <tr>
          <th>Toán tử</th>
          <th>Mô tả</th>
          <th>Ví dụ</th>
          <th>Kết qủa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>++$a</td>
          <td>Tăng trước, rồi sử dụng</td>
          <td>$a =. ; ++$a;</td>
          <td>$a = 6</td>
        </tr>
        <tr>
          <td>$a++</td>
          <td>Sử dụng , rồi tăng</td>
          <td>$a = 5; $b - $a++;</td>
          <td>$a = 5; $b = 6</td>
        </tr>
        <tr>
          <td>--$a</td>
          <td>Giảm trước, rồi sử dụng</td>
          <td>$a = 5; --$a;</td>
          <td>$a = 4</td>
        </tr>
        <tr>
          <td>$a--</td>
          <td>Sử dụng trước, rồi giảm</td>
          <td>$a = 5; $b = $a--;</td>
          <td>true</td>
        </tr>
      </tbody>
</table>

## Bài 14: Câu lệnh điều kiện if-else

`6. Câu lệnh điều kiện if-else`

Câu lệnh điều kiện `if-else` trong PHP được sử dụng để kiểm tra một điều kiện và
thực hiện các khối mã khác nhau trên kết quả của điều kiện đó.

Câu lệnh if đơn giản: câu lệnh if sẽ thực thi một khối mã nếu đk là true.

ví dụ câu lệnh if:

```php
$age = 18;

if ($age >= 18) {
  echo "Bạn đủ tuổi để lái xe!";
}
```

Giải thích:
Nếu `$age >=18`, câu lệnh trong {} sẽ được thực hiện. <br />
Ngược lại, nếu `$age < 18`, không có gì xảy ra.

ví dụ câu lệnh if:

```php
$age = 16;

if ($age >= 18) {
  echo "Bạn đủ tuổi để lái xe!";
} else {
  echo "Bạn chưa đủ tuổi để lái xe";
}
```

Kết quả: Bạn chưa đủ tuổi để lái xe

## Bài 15: Toán tử 3 ngôi và câu điều kiện if lồng nhau

Toán tử ba ngôi: giúp viết if-else ngắn gọn hơn.
Cú pháp:

`(biểu_thức_điều_kiện) ? giá_trị_nếu_đúng : giá_trị_nếu_sai;`

ví dụ:

```php
$age = 20;
$message = ($age >= 18) ? "Bạn đủ tuổi lái xe" : "Bạn chư đủ tuổi";
echo $message;
```

## Bài 16: Câu lệnh điều kiện Switch - case

`6. Câu lệnh điều kiện switch-case`

Câu lệnh switch-case trong PHP được dùng để kiểm tra một biến với nhiều giá trị
khác nhau. Nó giúp thay thế if-else trong TH có nhiều điều kiện cần kiểm tra với
cùng 1 biến.

`🧠 Cú pháp switch trong PHP`

```php
<?php
switch ($variable) {
    case value1:
        // code
        break;
    case value2:
        // code
        break;
    default:
        // code nếu không khớp
}
?>
```

`📌 Ví dụ đơn giản`

```php
<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid day";
}
?>
```

👉 Kết quả: Wednesday

<hr />

`⚠️ Lưu ý quan trọng`

❗ 1. Phải có break; giúp kết thúc switch-case, nếu không có break, chương trình sẽ chạy tiếp
case sau.
Nếu không sẽ bị chạy xuyên xuống case dưới:

```php
<?php
$number = 1;

switch ($number) {
    case 1:
        echo "One";
    case 2:
        echo "Two";
}
?>
```

👉 Output: OneTwo (lỗi logic)

`❗ 2. default giống else`

- Chạy khi không case nào đúng

🔥 Ví dụ thực tế

```php
<?php
$role = "admin";

switch ($role) {
    case "admin":
        echo "Full access";
        break;
    case "user":
        echo "Limited access";
        break;
    default:
        echo "Guest";
}
?>
```

`🎯 Khi nên dùng switch?`

- So sánh 1 biến với nhiều giá trị cụ thể
- Code dễ đọc hơn if...else dài dòng

## Bài 17: Vòng lặp For

Trong PHP có 4 loại vòng lặp chính bạn cần biết 👇

`🔁 1. for (lặp có điều kiện rõ ràng)`

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>
```

👉 Dùng khi biết trước số lần lặp

## Bài 18: Vòng lặp while và do-while

`🔁 2. while (lặp khi còn đúng điều kiện)`

```php
// ví dụ 1
<?php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
?>

// ví dụ 2
$input = "";

while ($input != "1234") {
    $input = readline("Nhập mật khẩu: ");
}
```

👉 Dùng khi không chắc số lần lặp

`🔁 3. do...while (chạy ít nhất 1 lần)`

```php
<?php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
?>
```

👉 Luôn chạy ít nhất 1 lần dù điều kiện sai

## Bài 19: Vòng lặp foreach

`🔁 4. foreach (duyệt mảng)`

```php
<?php
$fruits = ["Táo", "Cam", "Xoài"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
```

👉 Dùng khi làm việc với array

<hr />

🔥 Ví dụ thực tế (foreach + key)

```php
<?php
$students = [
    "Hoang" => 9,
    "An" => 8,
    "Linh" => 10
];

foreach ($students as $name => $score) {
    echo "$name: $score<br>";
}
?>
```

`🎯 Tóm tắt nhanh`

- for: Biết số lần lặp
- while: Lặp theo điều kiện
- do...while: Muốn chạy ít nhất 1 lần
- foreach: Duyệt mảng
