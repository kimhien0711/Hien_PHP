Hàm strpos () được sử dụng để tìm kiếm một nhân vật / văn bản trong một chuỗi.
Nếu kết hợp được tìm thấy, chức năng này sẽ trở lại với vị trí nhân vật của trận đấu đầu
Page 13 of 413
tiên. Nếu không phù hợp được tìm thấy, nó sẽ trả về FALSE.
Hãy xem nếu chúng ta có thể tìm thấy chuỗi "thế giới" trong chuỗi ký tự của chúng tôi:


<?php
echo strpos("Hello world!","world");
?>

Kết quả trả về là
6

Vị trí từ "world" trong ví dụ trên là 6. Lý do mà nó là 6 (và không phải 7), là vị trí của ký
tự đầu tiên trong chuỗi là 0, và không phải 1.
Thông tin về 1 số chức năng của các hàm khác ( có thể là không đầy đủ nhưng cũng nên
đọc qua cho biết ) 