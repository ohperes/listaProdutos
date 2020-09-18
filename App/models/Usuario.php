<?php

class Usuario{
  public $nome;
  public $senha;
  public $tipo;
  public $email;

  function __construct($nome, $email, $senha, $tipo){
    $this->nome  = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->tipo  = $tipo;
  }

  public function verificaAdmin($tipo){

    if ($tipo == '2'){
      return true;
    } else {
      return false;
    }

  }
}