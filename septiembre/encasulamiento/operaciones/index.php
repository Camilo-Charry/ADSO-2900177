<?php

include('libreria/operaciones.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-fluid">
        <div class="col-12 row">
            <div class="col-6">
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <label for="numeroUno">Numero Uno</label>
                            <input class="input" type="number" name="numeroUno" id="numeroUno" value=0>
                        </div>
                        <div class="col">
                            <label for="txtNumeroDos">Numero Dos</label>
                            <input class="input" type="number" name="numeroDos" id="numeroDos" value=0>
                        </div>
                        <div class="col">
                            <button type="submit" name="enviar">operar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
    <?php

        $usuarioNumeroUno=$_POST['numeroUno'];
        $usuarioNumeroDos=$_POST['numeroDos'];
        
        $numeroUno= new operaciones();
        $numeroUno->setNumeroUno($usuarioNumeroUno);

        $numeroDos= new operaciones();
        $numeroDos->setNumeroDos($usuarioNumeroDos);

        $sumar= new control();
        $restar= new control();
        $multiplicar= new control();
        $dividir= new control();

        if(isset($_POST['enviar'])){

            echo "suma: ".$sumar->suma(
                $numeroUno->getNumeroUno(),
                $numeroDos->getNumeroDos()
            )."<br>";
            echo "resta: ".$restar->resta(
                $numeroUno->getNumeroUno(),
                $numeroDos->getNumeroDos()
            )."<br>";
            echo "multiplicacion: ".$multiplicar->multiplicacion(
                $numeroUno->getNumeroUno(),
                $numeroDos->getNumeroDos()
            )."<br>";
            echo "suma: ".$sumar->suma(
                $numeroUno->getNumeroUno(),
                $numeroDos->getNumeroDos()
            );
        }
    ?>
</body>
</html>