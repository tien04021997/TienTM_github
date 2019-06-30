<?php
$phpArray = array("hà nội", "hồ chí minh", "đà nẵng");


Class Student
{
    public $name;
    public $age;
    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$an = new Student("Nguyễn Văn An", 21, "Hà Nội");
echo "<pre>";
print_r($phpArray);

echo "</pre>";

echo "<pre>";
print_r($an);

echo "</pre>";

/*
 * Để chuyển dổi từ php -> json dùng hàm
 * json_encode()
 * */


$phpjson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpjson1);

echo "</pre>";


$phpjson2 = json_encode($an);
echo "<pre>";
print_r($phpjson2);

echo "</pre>";
