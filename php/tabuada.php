<?php

function fazerTabuada($numero)
{

    $contador = 0;

    if (is_int($numero) == true) {
        do {
            $resultado = $numero * $contador;
            echo  "<tr>" . "<td>" . $numero . "x" . $contador . "=" . $resultado . "</td>" . "</tr>";
            $contador++;
        } while ($contador <= 10);
    } else {
        echo "Digite um número.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>

<body>
    <h1>Tabuada</h1>
    <table>
        <?php
        $numero = intval($_POST["numero"]);
        fazerTabuada($numero);
        ?>
    </table>

</body>

</html>