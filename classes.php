<?php
$blue = "\033[34m";
$reset = "\033[0m";

class Produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirDetalhes(){
        return "Produto: $this->nome."."\n". "Preço: $this->preco."."\n"."Quantidade em estoque: $this->quantidade";
    }

    public function calcularTotal(){
        return "Preço total do produto: " . ($this->preco * $this->quantidade);
    }
}

$produto1 = new Produto();
$produto1->nome = "Tela 65x65";
$produto1->preco = 45.99;
$produto1->quantidade = 20;

$produto2 = new Produto();
$produto2->nome = "Tinta a Óleo 8 cores";
$produto2->preco = 29.99;
$produto2->quantidade = 30;

echo $blue . "Produto 1 para venda." . $reset . "\n";
echo $produto1->exibirDetalhes() . "\n";
echo $produto1->calcularTotal() . "\n";
echo $blue . "Produto 2 para venda." . $reset . "\n";
echo $produto2->exibirDetalhes() . "\n";
echo $produto2->calcularTotal() . "\n";
?>