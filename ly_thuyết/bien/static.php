Khi một hàm được hoàn thành, tất cả các biến của nó thường bị xóa. Tuy nhiên, đôi khi bạn
muốn biến địa phương để không bị xóa.
Để làm điều này, sử dụng các từ khóa tĩnh khi lần đầu tiên bạn khai báo các biến:


<!-- static $rememberMe; -->


Sau đó, mỗi khi hàm được gọi, biến đó vẫn sẽ có những thông tin nó có từ thời gian qua các
chức năng được gọi.
Lưu ý: biến vẫn là local đến chức năng. 