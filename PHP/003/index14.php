<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$cities = array();
$cities['hn'] = array(
    'name' => 'Hà nội',
    'district' => array(
        'hbt' => array(
            'name' => 'Hai bà trưng',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        ),
        'tx' => array(
            'name' => 'Thanh xuân',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        ),
        'cg' => array(
            'name' => 'Cầu giấy',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        )
    )
);

$cities['hcm'] = array(
    'name' => 'Hồ chí minh',
    'district' => array(
        'hbt' => array(
            'name' => 'Quận nhất',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        ),
        'tx' => array(
            'name' => 'Quận 7',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        ),
        'cg' => array(
            'name' => 'Quận 9',
            'unit' => array('phường 1', 'phường 2', 'phương 3')
        )
    )
);
echo "<pre>";
print_r($cities);
echo "</pre>";


echo "<br> Truy cập phần tử của mảng đa chiều";
echo "<br>" . $cities['hn']['district']['hbt']['name'];
echo "<br>" . $cities['hn']['district']['hbt']['unit'][0];
echo "<br>" . $cities['hn']['district']['hbt']['unit'][1];
echo "<br>" . $cities['hn']['district']['hbt']['unit'][2];

//echo "<br>" .$cities['name'];
echo "<br>" . $cities['hcm']['name'];
echo "<br>" . $cities['hcm']['district']['hbt']['name'];
echo "<br>" . $cities['hcm']['district']['hbt']['unit'][0];
echo "<br>" . $cities['hcm']['district']['hbt']['unit'][1];
?>
</body>
</html>