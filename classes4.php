<?php
abstract class FormaGeometrica{

    public $lado1;
    public $lado2;

    public function __construct($lado1, $lado2) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }

    public function calcularArea(){
        return ($this->lado1 * $this->lado2);
    }
}
//
class Quadrado extends FormaGeometrica{
    public function __construct($lado) {  
        parent::__construct($lado, $lado);
        
    }

    public function calcularArea(){
        return ($this->lado1 * $this->lado1);
    }
}
//
class Triangulo extends FormaGeometrica{
    public function __construct($lado1, $lado2) {  
        parent::__construct($lado1, $lado2);
    }

    public function calcularArea(){
        return ($this->lado1 * $this->lado2) / 2;
    }
}
//
class Retangulo extends FormaGeometrica{
    public function __construct($lado1, $lado2) {  
        parent::__construct($lado1, $lado2);
    }

    public function calcularArea(){
        return ($this->lado1 * $this->lado2);
    }
}
//
class Pentagono{}
//
class Trapezio{}
//
class Diamante{}
//
class Paralelogramo extends FormaGeometrica{
    public function __construct($lado1, $lado2) {  
        parent::__construct($lado1, $lado2);
    }

    public function calcularArea(){
        return ($this->lado1 * $this->lado2);
    }
}
//
class Circulo{}

$quadrado1 = new Quadrado(4);
echo "Área do Quadrado: " . $quadrado1->calcularArea() . "\n";

$triangulo1 = new Triangulo(5, 5);
echo "Área do Triangulo: " . $triangulo1->calcularArea() . "\n";

$retangulo1 = new Retangulo(3, 7);
echo "Área do Retangulo: " . $retangulo1->calcularArea() . "\n";

$paralelogramo1 = new Retangulo(2, 9);
echo "Área do Paralelogramo: " . $paralelogramo1->calcularArea() . "\n";
?>