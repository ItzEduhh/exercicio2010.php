<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;

    public function ligar(){
        return "O carro " . $this->modelo . " " . $this->ano . " está ligado";
    }
}

class Eletrico extends Carro{
    public $autonomia;


    public function exibirAuto(){
        return $this->ligar;
    }
}

$carro1 = new Carro();
$carro1->marca = "Toyota";
$carro1->modelo = "Corolla";
$carro1->ano = "2020";

echo $carro1->ligar();
?>