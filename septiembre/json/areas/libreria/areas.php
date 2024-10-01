<?php

    class AreaCuadrado
    {
        private $lado;

        public function __construct(valores $lado)
        {
            $this->lado=$lado->getValor();

        }

        public function areaCuadrado()
        {
            $this->areaCuadrado= $this->lado * $this->lado;

            return $this->areaCuadrado;
        }

    }

    class AreaRectangulo
    {
        private $base;
        private $altura;

        public function __construct(valores $base, valores $altura)
        {
            $this->base=$base->getValor();
            $this->altura=$altura->getValor();

        }
        public function areaRectangulo()
        {
            $this->areaRectangulo= $this->base * $this->altura;

            return $this->areaRectangulo;
        }

    }


    class AreaTriangulo
    {
        private $base;
        private $altura;

        public function __construct(valores $base, valores $altura)
        {
            $this->base=$base->getValor();
            $this->altura=$altura->getValor();

        }
        public function areaTriangulo()
        {
            $this->areaTriangulo= ($this->base * $this->altura)/2 ;

            return $this->areaTriangulo;
        }

    }

?>