<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Service - Teste</title>
</head>
<body>
<?php

$numero = 20;

$xml = simplexml_load_file("http://localhost:8000/ws_validacao.php?numero=" . $numero);

// if (isset($xml->informacao)) {
//     if ($xml->informacao == "PAR") {
//         echo "O número é par.";
//     } else if ($xml->informacao == "ÍMPAR") {
//         echo "O número é ímpar.";
//     } else {
//         echo "Retorno inválido.";
//     }
// } else {
//     echo "Falha na comunicação com o web service.";
// }

?>
</body>
</html>