<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Câu lệnh điều kiện if...elseif..else trong php</h1>
<?php
$age = 19;
if($age < 18){
    echo "<br> trẻ em";
} elseif ($age < 30){
    echo "<br> Thanh niên";
} elseif ($age < 50){
    echo "<br> Trung niên";
} else{
    echo "<br> Người già";
}
?>
</body>
</html>