<?php

class User{
    public $nome;
    public $senha;
    public $tipo;
    public $email;

    function __construct($nome, $senha, $tipo, $email){
        $this->nome  = $nome;
        $this->senha = $senha;
        $this->tipo  = $tipo;
        $this->email = $email;
    }

    public function verificaAdmin($tipo){

        if ($tipo == '2'){
            return true;
        } else {
            return false;
        }

    }
}