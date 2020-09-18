<?php
require_once "Connection.php";
require_once "Usuario.php";

class CrudUsuario {

    private $conexao;

    function __construct(){
      $this->conexao = Connection::getConexao();
    }

    public function login($nome){
      $consulta = $this->conexao->query("SELECT senha FROM usuario WHERE nome = '{$nome}'");
      $produto = $consulta->fetch(PDO::FETCH_ASSOC);

      return $produto;
    }

    public function getUsuario($nome){
      $sql = "SELECT * FROM usuario WHERE nome = '{$nome}';";

      $this->conexao->exec($sql);
    }

    public function cadastrar($nome, $senha, $tipo, $email){
      $sql = "INSERT INTO usuario (nome, senha, tipo, email) VALUES ('{$nome}', '{$senha}', {$tipo}, '{$email}')";

      $this->conexao->exec($sql);
    }

    public function uparUsuarios(Usuario $admin, Usuario $user){
      if ($admin->tipo == '2'){
          $sql = "UPDATE usuario SET tipo = '2' WHERE nome = {$user->nome}";

          $this->conexao->exec($sql);

          return true;
      } else {
          return false;
      }

    }
}

$crud = new CrudUsuario();

$crud->cadastrar('batata', 'batata', '1', 'batata@root.com');
$test = $crud->login('batata');
print_r($test);