<?php
require_once "Connection.php";
require_once "Produto.php";

class CrudProduto {
  private $conexao;

  function __construct(){
    $this->conexao = Connection::getConexao();
  }

  public function cadastraProd(Produto $produto){
    $sql = "INSERT INTO produto (nome, preco, marca, validade) VALUES ('{$produto->nome}', '{$produto->preco}', '{$produto->marca}', '{$produto->validade}')";

    $this->conexao->exec($sql);
  }

  public function getProdutoById($id){
    $consulta = $this->conexao->query("SELECT nome FROM produto WHERE id = {$id}");
    $produto = $consulta->fetch(PDO::FETCH_ASSOC);

    return $produto;
  }

  public function getProdutos(){
    $consulta = $this->conexao->query("SELECT * FROM produto");
    $produtos = $consulta->fetchAll(PDO::FETCH_OBJ);

    return $produtos;
  }
  
}