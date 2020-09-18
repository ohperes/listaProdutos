<?php
require_once "Connection.php";
require_once "Usuario.php";

class CrudUsuario {
  private $conexao;

  function __construct(){
    $this->conexao = Connection::getConexao();
  }

  public function getSenha($email){
    $consulta = $this->conexao->query("SELECT senha FROM usuario WHERE email = '{$email}'");
    $senha = $consulta->fetch(PDO::FETCH_ASSOC);

    return $senha;
  }

  public function getUsuario($email){
    $consulta = $this->conexao->query("SELECT * FROM usuario WHERE email = '{$email}'"); 
    $usuario = $consulta->fetch(PDO::FETCH_OBJ);
    
    return $usuario;
  }

  public function cadastraUsuario(Usuario $usuario){
    $sql = "INSERT INTO usuario (nome, email, senha, tipo) VALUES ('{$usuario->nome}', '{$usuario->email}', '{$usuario->senha}', '{$usuario->tipo}')";
            
    $this->conexao->exec($sql);
  }

  public function emailExistente($email){
    $consulta = $this->conexao->query("SELECT * FROM usuario WHERE email = '{$email}'");

    if($consulta->rowCount() != 0){
      return True;
    }
    else{
      return False;
    }
  }

}
