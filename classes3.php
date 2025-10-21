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

class Gerente{
    public $bonus;

    public function __construct($nome, $salarioBase, $bonus) {  
        parent::__construct($nome, $salarioBase);
        $this->bonus = $bonus;
    }
}

$funcionario1 = new Funcionario("Black Pantera", 3500.00);

echo $funcionario1->calcularSalario();
?>