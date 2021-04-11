<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$agora = time();

// echo $agora;
echo "<br>";

echo date("Y-m-d H:i:s", time());
echo "<br>";

$agora = strtotime("+ 1 day", time());

echo date("Y-m-d H:i:s", $agora);
echo "<br><br>";

echo date("Y-m-d H:i:s", strtotime("+ 2 day", time())) . "<br>";
echo date("Y-m-d H:i:s", strtotime("+ 1 week", time())) . "<br>";
echo date("Y-m-d H:i:s", strtotime("+ 1 year", time())) . "<br>";
echo "<br>";

echo date("d/m/Y H:i:s", mktime(0, 0, 0, 1, 1, 2000));
echo "<br>";

echo date("d/m/Y H:i:s", mktime(0, 0, 0, 1, 1, 2000));
echo "<br>";

$data1 = mktime(0, 0, 0, 1, 1, 2000);
$data2 = time();
$dif = ($data2 - $data1) / 60 / 60 / 24;
echo (int)$dif, " dias passados!";
echo "<br>";

echo date("Y-m-d H:i:s", mktime(10, 13, 12, 15, 14, 16));
echo "<br>";

echo date("Y-m-d", strtotime("+ 2 day", time()));
echo "<br>";

echo mktime(0, 0, 0, 11, 29, 2000) === mktime(0, 0, 0, 11, 29, 2000);
echo "<br>";

echo time()."<br>";
echo date("Y-m-d H:i:s", mktime(10, 13, 12, 15, 14, 16));
?>

</body>
</html>