<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function payTaxes() {
        return $this->salary > 6000
        ? "Tendrá que pagar impuestos."
        : "Sueldo mínimo. No paga impuestos.";
    }
}

$employee1 = new Employee("Desiree", 800);

echo $employee1->payTaxes();

?>