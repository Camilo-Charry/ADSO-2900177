<<?php
class Numero {
    private $valor;

    // Constructor
    public function __construct($valor) {
        $this->setValor($valor);
    }

    // Set metodo
    public function setValor($valor) {
        $this->valor = $valor;
    }

    // Get metodo
    public function getValor() {
        return $this->valor;
    }
}

class Operaciones {
    private $numeroUno;
    private $numeroDos;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    // Constructor
    public function __construct(Numero $numeroUno, Numero $numeroDos) {
        $this->numeroUno = $numeroUno->getValor();
        $this->numeroDos = $numeroDos->getValor();
        $this->sumar();
        $this->restar();
        $this->multiplicar();
        $this->dividir();
    }

    
// Método de suma
    public function sumar() {
        $this->suma = $this->numeroUno + $this->numeroDos;
    }

    
// Método de resta
    public function restar() { 
        $this->resta = $this->numeroUno - $this->numeroDos;
    }

    
// Método de multiplicacion
    public function multiplicar() {
        $this->multiplicacion = $this->numeroUno * $this->numeroDos;
    }

    
// Método de división
    public function dividir() {
        if ($this->numeroDos != 0) {
            $this->division = $this->numeroUno / $this->numeroDos;
        } else {
            $this->division = "No se puede dividir por cero";
        }
    }
}
?>

