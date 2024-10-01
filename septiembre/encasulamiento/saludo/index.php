<?php
    
    include('libreria/saludo.php');

    $saludar=new saludo();

    $saludar->setSaludar('<h2>Hola Mundo</h2>');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saludo</title>
</head>
<body>
    <?php
    
        echo $saludar->getSaludar();
    
    ?>
</body>
</html>