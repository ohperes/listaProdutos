<?php

require_once "App/models/CrudProduto.php";
require_once "App/models/CrudUsuario.php";
require_once "App/models/Produto.php";
require_once "App/models/Usuario.php";

#Como não havia necessidade de usar algum padrão de projeto no teste, resolvi apenas usar um controlador para tudo.

Class Controller{
  public function Controller(){

  }

  public function index(){
    if(isset($_SESSION['usuario'])){
      $crud = new CrudProduto();
      $produtos = $crud->getProdutos();
  
      include 'App/views/lista_produtos.php';
    }else{
      
      header('location: ../../index.php?acao=form-login');
    }
  }

  public function formularioProd(){
    include 'App/views/cadastra_produto.php';
  }

  public function formularioUser(){
    include 'App/views/cadastro.php';
  }

  public function formularioLogin(){
    include 'App/views/login.php';
  }

  public function cadastraProd(){
    $produto = new Produto($_POST['nome_prod'], $_POST['preco_prod'], $_POST['marca_prod'], $_POST['dt_validade']);
    $crud = new CrudProduto();
    
    $crud->cadastraProd($produto);
    $produtos = $crud->getProdutos();
  
    include 'App/views/lista_produtos.php';
  }

  public function cadastraUser(){
    
    $usuario = new Usuario($_POST['nome_cad'], $_POST['email_cad'], $_POST['senha_cad'], '1');

    $crud = new CrudUsuario();
    if($crud->emailExistente($_POST['email_cad'])){
      print("Esse email já foi cadastrado");
    }else{
      $crud->cadastraUsuario($usuario);
    
      header('location: App/views/login.php');
    }
  }

  public function login(){
    session_destroy();
    
    $crud = new CrudUsuario();
   
    $usuario = $crud->getUsuario($_POST['email_login']);

    if($_POST['senha_login'] == $usuario->senha){
      session_start();
      $_SESSION['usuario'] = $usuario;
      header('location: index.php?acao=index'); 
    }else{
      print("credenciais incorretas");
    }
    
  }

  public function logout(){
    session_destroy();
    header('location: index.php');
  }
}
