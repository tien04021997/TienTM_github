<?php
// hàm isset() check xem giá trị hoặc biến có tồn tại hay không.
if(isset($_POST) && isset($_POST["email"]) && isset($_POST["password"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<br> Email là: " . $email;
    echo "<br> Password là: " . $password;
}
?>