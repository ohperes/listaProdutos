<?php
require_once "App/models/CrudProduto.php";
require_once "App/models/Produto.php";

Class Controller{
  public function Controller(){

  }

  public function index(){
    
    $crud = new CrudProduto();
    $produtos = $crud->getProdutos();

    include 'App/views/lista_produtos.php';
  }

  public function formularioProd(){
    include 'App/views/cadastra_produto.php';
  }

  public function cadastraProd(){
    $produto = new Produto($_POST['nome_prod'], $_POST['preco_prod'], $_POST['marca_prod'], $_POST['dt_validade']);
    // $produto->nome = $_POST['nome_prod'];
    // $produto->preco = $_POST['preco_prod'];
    // $produto->marca = $_POST['marca_prod'];
    // $produto->validade = $_POST['dt_validade'];
    $crud = new CrudProduto();
    
    $crud->cadastraProd($produto);
    $produtos = $crud->getProdutos();
  
    include 'App/views/lista_produtos.php';
  }
}
