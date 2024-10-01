<?php

include 'libreria/operaciones.php';
include 'libreria/numero.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <h2>Operaciones</h2>
    <?php 
    
    $numUno= new Numero(6);

    $numDos= new Numero(7);

    $operar= new Operaciones(
        $numUno,
        $numDos
        
    );

    echo 
        $numUno->getvalor()." + ".$numDos->getvalor()." = ".$operar->suma()."<br>".
        $numUno->getvalor()." - ".$numDos->getvalor()." = ".$operar->resta()."<br>".
        $numUno->getvalor()." x ".$numDos->getvalor()." = ".$operar->multiplicacion()."<br>".
        $numUno->getvalor()." / ".$numDos->getvalor()." = ".$operar->division()."<br>"
    ;
    
    ?>
</body> 
</html>