<?php

class Empleado {
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function pagarTax() {
        return $this->sueldo > 6000
        ? "Tendrá que pagar impuestos."
        : "Sueldo mínimo. No paga impuestos.";
    }
}

$empleado1 = new Empleado("Desiree", 800);

echo $empleado1->pagarTax();

?>