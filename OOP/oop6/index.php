<?php
/**
 * Created by PhpStorm.
 * Yêu cầu : Xây dựng class tên là Database
 * có 1 thuộc tính là connection để lưu trữ kết nội đến CSDL
 * và có 4 thuộc tính : ip database ( localhost ) , user db , pass db , tên CSDL
 * Class này có 1 method khởi tạo là __construct() làm nhiệm vụ kết nội đến CSDL
 * constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
 * và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
 *
 */
include_once "database.php";
$db = new Database("localhost", "root", "", "oop");
// gọi static method
Database::disconnect();
// truy cập thuộc tinh static
$connect = Database::$connection;
/**
 * Với thuộc tính static và method static chúng ta có thể gọi mà không cần khởi tạo
 * đối tượng như sau :
 * Database::disconnect();
 * $connect = Database::$connection;
 */