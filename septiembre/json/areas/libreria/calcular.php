<?php

    include('areas.php');
    include('valores.php');

    $lado= new valores(10);

    $base= new valores(10);
    $altura= new valores(5);

    $areaCuadrado= new AreaCuadrado($lado);

    $areaRectangulo= new AreaRectangulo(
        $base,
        $altura
    );

    $areaTriangulo= new AreaTriangulo(
        $base,
        $altura
    );

    $response=[];

    $response['areaCuadrado']['lado']=$lado->getValor();
    $response['areaCuadrado']['area']=$areaCuadrado->areaCuadrado();
    $response['areaRectangulo']['base']=$base->getValor();
    $response['areaRectangulo']['altura']=$altura->getValor();
    $response['areaRectangulo']['area']=$areaRectangulo->areaRectangulo();
    $response['areaTriangulo']['base']=$base->getValor();
    $response['areaTriangulo']['altura']=$altura->getValor();
    $response['areaTriangulo']['area']=$areaTriangulo->areaTriangulo();


    header('content-Type: application/json');

    echo json_encode($response);
