<?php
session_start();

require_once 'App/controllers/Controller.php';

$controller = new Controller();

if($_GET['acao'] == 'index' or !isset($_GET['acao'])){
  $controller->index();
}

if($_GET['acao'] == 'form-prod'){
  $controller->formularioProd();
}

if($_GET['acao'] == 'cad-prod'){
  $controller->cadastraProd();
}

if($_GET['acao'] == 'form-user'){
  $controller->formularioUser();
}

if($_GET['acao'] == 'cad-user'){
  $controller->cadastraUser();
}

if($_GET['acao'] == 'form-login'){
  $controller->formularioLogin();
}

if($_GET['acao'] == 'login'){
  $controller->login();
}

if($_GET['acao'] == 'logout'){
  $controller->logout();
}
