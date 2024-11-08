Phạm vi toàn cầu đề cập đến bất kỳ biến được định nghĩa bên ngoài
của bất kỳ chức năng.
Biến toàn cầu có thể được truy cập từ bất kỳ một phần của kịch bản đó
không phải là bên trong một hàm.
Để truy cập vào một biến toàn cầu từ bên trong một chức năng, sử
dụng global từ khóa:

Ví dụ :


<?php
$a = 5;
$b = 10;
function myTest()
{
global $a, $b;
$b = $a + $b;
}
myTest();
echo $b;
?>


Kết quả đoạn code trên là 15 ( sau khi chạy )
PHP cũng lưu trữ tất cả các biến toàn cầu trong một mảng gọi là $
GLOBALS [ index ]. Chỉ số của nó là tên của biến. Mảng này cũng có
thể truy cập từ bên trong chức năng và có thể được sử dụng để cập
nhật các biến toàn cầu trực tiếp.
Ví dụ trên có thể được viết lại như thế này:

<!-- <?php 
// $a = 5; 
// $b = 10; 
// function myTest() 
// { 
// global $a, $b; 
// return $b = $a + $b; 
// }  
// myTest(); 
// echo $b; 
?>  -->
