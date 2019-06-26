<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <h1>Kết nối CSDL</h1>

    <?php
    $serverIPDatabase = "127.0.0.1";
    $serverUserNameDatabase = "root";
    $serverDatabasePassword = "";
    $databaseName = "demo1";

    /*
     * Tạo một biến connection
     * */

    $conection = new mysqli($serverIPDatabase, $serverUserNameDatabase, $serverDatabasePassword, $databaseName);

    /*
     * Kiểm tra kết nối đến cơ sở dữ liệu nếu trả về true thì báo lỗi còn ngược lại thì báo thành công
     * */
    if ($conection -> connect_error)
    {
        /*
         * Ngắt chương trình khi mà kết nối thất bại;
         * */

        die("Kết nối thất bại");
    }

     echo "<br> Kết nối thành công";

    ?>
</div>
</body>
</html>