<?php
/*
 * Khai bao 4 hang so ket noi CSDL
 * */

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "appcrud");

/**
 * kết nối CSDL
 */

$connection = mysqli_connect(DB_SERVER,DB_USER, DB_PASSWORD, DB_NAME);
if ($connection->connect_error == true){
    die("Kết nối thất bại");
}

