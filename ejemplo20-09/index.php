<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con Números</title>
    
</head>
<body>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    include("./libreria/ejercicio.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = new Numero($_POST['num1']);
        $numero2 = new Numero($_POST['num2']);
        $operaciones = new Operaciones($numero1, $numero2);

        echo "<h2>Resultados:</h2>";
        echo "Suma: " . $operaciones->suma . "<br>";
        echo "Resta: " . $operaciones->resta . "<br>";
        echo "Multiplicación: " . $operaciones->multiplicacion . "<br>";
        echo "División: " . $operaciones->division . "<br>";
    }
    ?>
</body>
</html>