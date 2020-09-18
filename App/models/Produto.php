<?php

require_once "Connection.php";

class Produto {
    public $nome;
    public $preco;
    public $marca;
    public $validade;

    public function __construct($nome, $preco, $marca, $validade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->marca = $marca;
        $this->validade = $validade;

    }
}