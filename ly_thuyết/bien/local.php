Một biến khai báo trong một hàm PHP là địa phương và chỉ có thể
được truy cập trong phạm vi chức năng đó. 

Ví dụ:(Biến có phạm vi local)


<?php
$a = 5; // phạm vi local
function myTest()
{
echo myTest(); // phạm vi local
}
myTest();
?>


Các kịch bản trên sẽ không sản xuất bất kỳ sản lượng vì echo tuyên bố
đề cập đến biến phạm vi địa phương biến $a, mà đã không được chỉ
định một giá trị trong phạm vi này.Bạn có thể có các biến địa phương
có cùng tên trong các chức năng khác nhau, bởi vì các biến địa phương
chỉ được công nhận bởi các chức năng mà chúng được khai báo.Các
biến địa phương sẽ bị xóa ngay sau khi chức năng, nhiệm vụ được
hoàn thành. 