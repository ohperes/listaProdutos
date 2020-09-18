<?php
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