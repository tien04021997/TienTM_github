<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Các toán tử phổ biến trong php</h1>
<h1>Trong php sử dụng dấu . để chuỗi</h1>
<?php
    $a = 5;
    $b = 2;
    $tong = $a + $b;
    $hieu = $a - $b;
    $tich = $a *  $b;
    $thuong = $a / $b;
    $laydu = $a % $b;
    echo "<br> tổng của 2 số là " . $tong;
    echo "<br> hiệu của 2 số là " . $hieu;
    echo "<br> tích của 2 số là " . $tich;
    echo "<br> thương của 2 số là " . $thuong;
    echo "<br> phép chia lấy dư của 2 số là " . $laydu;
    echo "<br>" . "chào " . "Hà Nội";
?>

</body>
</html>