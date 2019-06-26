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
// nạp file kết nối cơ sở dữ liệu
include_once "config.php";

$name = '';
$address = '';
$salary = '';

/**
 * Kiểm tra xem có dữ liệu submit đi hay không
 * !empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
 * isset($_POST) dùng để kiểm tra biến có tồn tại hay không
 */

if (isset($_POST) && !empty($_POST))
{
    /**
     * Tạo ra 1 biến để check lỗi mặc định là rỗng
     */
    $error = array();

    /**
     * !isset($_POST["name"]) => không tồn tại
     *  empty($_POST["name"]) => rỗng
     */
    if (!isset($_POST['name']) || empty($_POST['name']))
    {
        $error[] = "Tên nhân viên không hợp lệ";
    }

    if (!isset($_POST['address']) || empty($_POST['address']))
    {
        $error[] = "Địa chỉ không hợp lệ";
    }

    if (!isset($_POST['salary']) || empty($_POST['salary']))
    {
        $error[] = "Lương không hợp lệ";
    }

    /**
     * $errors rỗng tức là không có lỗi
     */

    if (empty($error))
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlInsert = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";


        // Thực hiện câu SQL

        $result = $connection->query($sqlInsert);
        if ($result == true)
        {
            echo "<div class='alert alert-success'>Thêm mới thành công <a href='index.php'>Trang chủ</a></div>";
        }
        else
        {
            echo "<div class='alert alert-danger'>Thêm mới thất bại</div>";
        }
    }
    else
    {
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
            <h1>Thêm nhân viên mới</h1>
            <form name="create" action="" method="post">
                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $address ?>">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary ?>">
                </div>
                <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>