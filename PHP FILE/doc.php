Hàm file_exists() kiểm tra xem một tệp hoặc thư mục có tồn tại hay không.
<!-- file_exists(path) -->

<?php
echo file_exists("webdictionary.txt");
?>


Hàm fopen() mở một tệp hoặc URL.
<!-- fopen(filename, mode, include_path, context) -->

<?php
$file = fopen("test.txt", "r");

//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);
  echo $line. "<br>";
}

fclose($file);
?>

Hàm fwrite() ghi vào một tệp đang mở
<!-- fwrite(file, string, length) -->

<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>

Hàm fclose() đóng con trỏ tệp đang mở.
<!-- fclose(filepointer) -->

<?php
$file = fopen("test.txt", "r");
fclose($file);
?>

Hàm này fgets()đọc nội dung từ tệp cho đến ngắt dòng tiếp theo và ghi vào một charmảng. Một \0ký tự kết thúc 
null được thêm vào cuối nội dung. Chỉ báo vị trí được di chuyển đến ký tự chưa đọc tiếp theo trong tệp.
<!-- fgets(char * destination, int size, FILE * fptr); -->



FILE *fptr;

<!-- // Open a file in read mode -->
fptr = fopen("filename.txt", "r");

// Store the content of the file
char myString[100];

// Read the content and store it inside myString
fgets(myString, 100, fptr);

// Print the file content
printf("%s", myString);

// Close the file
fclose(fptr);


copy file

hàm fputcsv() định dạng một dòng là CSV và ghi nó vào một 