<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIP - Propriedades</title>
</head>
<body>

<?php

$filename = "Extra_ZipExemplo.zip";

$meuZip = zip_open($filename);

if ($meuZip) {
    while ($zipEntry = zip_read($meuZip)) {
        echo "Nome: " . zip_entry_name($zipEntry);
        echo "<BR>Tamanho: " . zip_entry_filesize($zipEntry);
        echo "<BR>Tamanho comprimido: " . zip_entry_compressedsize($zipEntry);
        echo "<BR>Método de compressão: " . zip_entry_compressionmethod($zipEntry);
        echo "<BR>--------------------------------------------";
        echo "<BR><BR>";
    }
} else {
    echo "Falha na abertura do arquivo zip.";
}

?>

</body>
</html>