<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<?php
/**
 * Nạp kết nối CSDL
 */

include_once "config.php";

/**
 * Lấy id từ trên url xuống
 */
$id = (int) $_GET["id"];
//var_dump($id);

$sqlSelect = "SELECT * FROM employees WHERE id=" .$id;
$result = $connection->query($sqlSelect);
$row = $result->fetch_assoc();
//echo "<pre>";
//print_r($row);
//echo "</pre>";
?>

<?php
if (isset($_POST) && !empty($_POST) && isset($_POST["employee_id"]))
{
/**
* Tạo ra 1 biến để check lỗi mặc định là rỗng
*/
$error = array();

/**
* !isset($_POST["name"]) => không tồn tại
*  empty($_POST["name"]) => rỗng
*/
if (!isset($_POST["name"]) || empty($_POST["name"])) {
$errors[] = "Tên nhân viên không hợp lệ";
}
if (!isset($_POST["address"]) || empty($_POST["address"])) {
$errors[] = "Địa chỉ nhân viên không hợp lệ";
}
if (!isset($_POST["salary"]) || empty($_POST["salary"])) {
$errors[] = "Lương nhân viên không hợp lệ";
}

/**
* $error rỗng tức là không có lỗi
*
*/

if (empty($error))
{
$id = (int) $_POST["employee_id"];
//$name = $_POST["name"];
//$address = $_POST['address'];
//$salary = $_POST['salary'];
// $arr = array("$id", "$name", "$address", "$salary");
//echo "<pre>";
// var_dump($arr);
//echo "</pre>";




$sqlDelete = "DELETE FROM employees WHERE  id = $id";
// Thực hiện câu SQL

//echo $sqlDelete;
$result = $connection->query($sqlDelete);
if ($result == true) {
echo "<div class='alert alert-success'>
    Xóa thành công ! <a href='index.php'>Trang chủ</a>
</div>";
} else {
echo "<div class='alert alert-danger'>
    Xóa thất bại !
</div>";
}

}
else{
/**
* Chuyển mảng $errors thành chuỗi = hàm implode()
*/
$errors_string = implode("<br>", $errors);
echo "<div class='alert alert-danger'>$errors_string</div>";
}


}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="" method="post">
                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">
                <div class="form-group">
                    <label><?php echo $row['name']?></label>
                </div>
                <button type="submit" class="btn btn-danger">xóa nhân viên</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>