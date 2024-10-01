<?php
    class Operaciones{
        
        private int $numeroUno;
        private int $numeroDos;

        public function setNumeroUno($numeroUno){
            $this->numeroUno=$numeroUno;
        }
        public function getNumeroUno(){
            $this->numeroUno;
            return $this->numeroUno;
        }
        public function setNumeroDos($numeroDos){
            $this->numeroDos=$numeroDos;
        }
        public function getNumeroDos(){
            $this->numeroDos;
            return $this->numeroDos;
        }

    }

    class Control{
        private int $numeroUno;
        private int $numeroDos;
        public int $suma;
        public int $resta;
        public int $multiplicacion;
        public int $division;
    
        public function suma($numeroUno,$numeroDos)
        {
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
    
            $suma=$this->numeroUno +  $this->numeroDos;
            
            return $suma;
        }
    
        public function resta($numeroUno,$numeroDos)
        {
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
    
            $resta=$this->numeroUno -  $this->numeroDos;
            
            return $resta;
        }

        public function multiplicacion($numeroUno,$numeroDos)
        {
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
    
            $multiplicacion=$this->numeroUno *  $this->numeroDos;
            
            return $multiplicacion;
        }

        public function division($numeroUno,$numeroDos)
        {
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
    
            $division=$this->numeroUno /  $this->numeroDos;
            
            return $division;
        }
    }
