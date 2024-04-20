<?php

$numero = $_GET["numero"] ;

if(is_int($numero) == true){
    fazerTabuada($numero);

}
function fazerTabuada($numero){
    do{
        $contador = 0;
        $resultado = $numero * $contador;
        echo "<li>" . $resultado . "</li>";
        $contador++;
    } while($contador = 10);

}
