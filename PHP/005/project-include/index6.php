<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nạp 1 hay nhiều file php vào 1 file khác</h1>
<pre>
    Để nạp file vào 1 file khác thì sử dụng :
    cách 1 : include "đường dẫn của file.php"
    cách 2 : include_once "đường dẫn của file.php"
    cách 2 : require "đường dẫn của file.php"
    cách 2 : require_once "đường dẫn của file.php"
     Hàm var_dump($bien) trả về kiểu dữ liệu của biến và giá trị của biến
    hàm này được sử dụng đẻ debug
</pre>

<?php
// nạp file functions.php vào trong file hiện tại
include_once ('function.php');
include_once ('function.php');
$r = 5;
$ketqua = tinhchuvihinhtron($r);
echo "tính chu vi hình tròn";
echo '<br>';
var_dump($ketqua);
/*
 * Xuất hiện lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in E:\xampp\htdocs\1902e\M6.PHP\day5\project-include\index1.php:19 Stack trace: #0 {main} thrown in E:\xampp\htdocs\1902e\M6.PHP\day5\project-include\index1.php on line 19
 * Do không tìm thầy hàm tính chu vi hình tròn
 */
?>
</body>
</html>