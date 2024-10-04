<?php

    include('valores.php');
    include('nomina.php');
    include('persona.php');

    $persona= new persona(
        "Camilo",
        "Charry"
    );

    $valorDias= new valores(90000);

    $diasTrabajados= new valores(41);

    

    $nomina= new nomina(
        $diasTrabajados,
        $valorDias 
    );

    $response=[];

    $response['nombre']=$persona->getNombre();
    $response['apellido']=$persona->getApellido();
    $response['sueldo']=$nomina->sueldo();
    $response['salud']=$nomina->salud();
    $response['arl']=$nomina->arl();
    $response['pension']=$nomina->pension();
    $response['deducibles']=$nomina->deducibles();
    $response['subTransporte']=$nomina->subTrasporte();
    $response['totalPagar']=$nomina->totalPagar();

    header('content-Type: application/json');
    echo json_encode($response);

?>