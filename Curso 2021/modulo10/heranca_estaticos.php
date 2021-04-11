<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança e elementos estaticos</title>
</head>
<body>

<?php

class EscalaMusical{

    public static $escalaDoMaior = "C D E F G A B C";

}

echo EscalaMusical::$escalaDoMaior;

?>

</body>
</html>