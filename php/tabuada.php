<?php
function fazerTabuada($numero){
    $contador = 0;
    do{
                $resultado = $numero * $contador;
        echo "<li>" . $resultado . "</li>";
        $contador++;
    } while($contador <= 10);

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero = intval($_POST["numero"]) ;
if(is_int($numero) == true){
    fazerTabuada($numero);

}else{
    echo "Digite um número.";
}
?>
</body>

</html>



