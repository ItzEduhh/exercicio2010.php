<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function ligar(){
        return "O carro " . $this->modelo . " " . $this->ano . " está ligado";
    }
}

class Eletrico extends Carro{
    public $autonomia;

    public function __construct($marca, $modelo, $ano, $autonomia) {  
        parent::__construct($marca, $modelo, $ano);
        $this->autonomia = $autonomia;
    }

    public function exibirAuto(){
        return "Autonomia do carro: " . $this->autonomia . "km.";
    }
}

$carroEletrico = new Eletrico("Toyota", "Corolla", "2020", "800");

echo $carroEletrico->ligar() . "\n";
echo $carroEletrico->exibirAuto();
?>