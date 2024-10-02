<?php

include 'libreria/areas.php';
include 'libreria/medidas.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <?php
    
        $ladoCuadrado= new Medidas(5);

        $baseTriangulo= new Medidas(10);
        $alturaTriangulo= new Medidas(8);

        $baseRectangulo= new Medidas(10);
        $alturaRectangulo= new Medidas(5);
        
        $cuadrado= new cuadrado($ladoCuadrado);
        $triangulo= new triangulo($baseTriangulo,$alturaTriangulo);
        $rectangulo= new rectangulo($baseRectangulo,$alturaRectangulo);
        

        echo 
            "<h2>areas cuadrado <br>".$cuadrado->cuadrado()."</h2><span> lado: {$ladoCuadrado->getValorMedidas()} </span> <br>".
            "<h2>areas triangulo <br>".$triangulo->triangulo()."</h2> <span> base: {$baseTriangulo->getValorMedidas()}<br>altura: {$alturaTriangulo->getValorMedidas()} </span> <br>".
            "<h2>areas rectangulo <br>".$rectangulo->rectangulo()."</h2> <span> base: {$baseRectangulo->getValorMedidas()}<br>altura: {$alturaRectangulo->getValorMedidas()} </span> <br>"
        ;

    ?>

</body>
</html>    