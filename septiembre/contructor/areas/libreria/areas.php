<?php

class cuadrado
{
    private $lado;
    private $areaCuadrado;
    
    public function __construct(Medidas $lado)
    {
        $this->lado=$lado->getValorMedidas();
    }
    public function cuadrado(){

        $this->areaCuadrado= $this->lado * $this->lado;
        return $this->areaCuadrado;
    }

}
class triangulo
{
    private $base;
    private $altura;
    private $areaTriangulo;
    
    public function __construct(Medidas $base, Medidas $altura)
    {
        $this->base=$base->getValorMedidas();
        $this->altura=$altura->getValorMedidas();
    }
    public function triangulo(){

        $this->areaTriangulo= ($this->base * $this->altura)/2;
        return $this->areaTriangulo;
    }

}
class Rectangulo
{
    private $base;
    private $altura;
    private $areaRectangulo;
    
    public function __construct(Medidas $base, Medidas $altura)
    {
        $this->base=$base->getValorMedidas();
        $this->altura=$altura->getValorMedidas();
    }
    public function rectangulo(){

        $this->areaRectangulo= $this->base * $this->altura;
        return $this->areaRectangulo;
    }

}

?>