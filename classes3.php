<?php
class Funcionario{
    public $nome;
    public $salarioBase;

    public function __construct($nome, $salarioBase) {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario(){
        return "O salário base de " . $this->nome . " é: " . $this->salarioBase;
    }
}

class Gerente extends Funcionario{
    public $bonus;

    public function __construct($nome, $salarioBase, $bonus) {  
        parent::__construct($nome, $salarioBase);
        $this->bonus = $bonus;
    }

    public function calcularSalario(){
        return "O salário base de " . $this->nome . " é: " . ($this->salarioBase + $this->bonus);
    }
}

$funcionario1 = new Gerente("Black Pantera", 3500.00, 549.99);

echo $funcionario1->calcularSalario();
?>