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
