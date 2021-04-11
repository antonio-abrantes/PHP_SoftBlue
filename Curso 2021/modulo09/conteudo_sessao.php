<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo Privado</title>
</head>
<body>

<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
        echo "Erro";
        exit();
    }

    echo "Olá " . $_SESSION["usuario"];
    echo "<BR><BR>";
?>

    <h1>Conteudo privado</h1>
</body>
</html>
<?php
    ob_flush();
?>