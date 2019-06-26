<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
//// hàm isset() check xem giá trị hoặc biến có tồn tại hay không.
//if (isset($_POST) && isset($_POST["weight"]) && isset($_POST["height"])){
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
//}
//?>

<div class="container">
    <h2>Tính chỉ số BMI</h2>
    <div class="row">
        <div class="col-xs-12">
            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputWeight">Cân nặng (kg)</label>
                    <input type="number" name="weight" class="form-control" id="exampleInputWeight" aria-describedby="emailHelp" placeholder="Nhập cân nặng (kg)">
                </div>
                <div class="form-group">
                    <label for="exampleInputHeight">Chiều cao</label>
                    <input type="number" name="height" class="form-control" id="exampleInputHeight" aria-describedby="emailHelp" placeholder="Nhập chiều cao (cm)">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST) && isset($_POST["weight"]) && isset($_POST["height"])){
    echo '<br> Cân nặng: ' . $_POST['weight'] . 'kg' ;
    echo '<br> Chiều cao: ' . $_POST['height'] . 'cm';

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = ($weight) / (($height / 100) * ($height / 100));
    echo '<br> Chỉ số BMI: ' . $bmi;
    if($bmi < 18.5){
        echo "<br> Gầy - thấp";
    }
    elseif ($bmi >= 18.5 && $bmi <= 24.9 ){
        echo "<br> Bình thường - trung bình ";
    }
    elseif ($bmi >= 25 && $bmi <= 29.9){
        echo "<br> Hơi béo - Cao";
    }
    elseif ($bmi >= 30 && $bmi <= 34.9){
        echo "<br> Béo phì cấp 1 - Cao";
    }
    elseif ($bmi >= 35 && $bmi <= 39.9){
        echo "<br> Béo phì cấp 2 - Rất Cao";
    }
    else{
        echo "<br> Béo phì cấp 3 - Nguy hiểm";
    }
}
?>

</body>
</html>