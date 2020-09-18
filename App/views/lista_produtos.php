<?php
require_once "App/models/CrudProduto.php";
require_once "App/models/Produto.php";
$crud = new CrudProduto();
$produtos = $crud->getProdutos();
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../../public/assets/css/lista_produtos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="public/assets/js/lista_produto.js"></script>
</head>
<body>
  <div id="container"> 
    <nav id="menu">
      <ul>
        <li>
          <label id="title" >
            <?php
              echo "Olá ";
              print_r($_SESSION['usuario']->nome);
            ?>
          </label>
        </li>
        <li id="pesq">
          <input id="pesquisa-input" name="pesquisa" required="required" type="text" placeholder="Pesquisar..."/>
        </li>
        <li id="logout"><a href="../../index.php?acao=logout">Sair</a></li>
      </ul>
    </nav>   
    <nav id="sub-nav">
      <div id="btn-div">
        <?php 
          if($_SESSION['usuario']->tipo == "2"){
            echo '<a href="../../index.php?acao=form-prod"><button id="cadastra-produto">Novo Produto</button></a>';
          }
        ?> 
      </div>
    </nav>
    <table id="table-prod">
      <thead id="thead-prod">
        <tr>
          <th>Nome</th>
          <th>Preço</th>
          <th>Marca</th>
          <th>Validade</th>
        </tr>
      </thead>
      <tbody  id="tbody-prod">
        <?php foreach($produtos as $produto): ?>
          <tr>
            <td><?php echo $produto->nome; ?></td>
            <td><?php echo $produto->preco; ?></td>
            <td><?php echo $produto->marca; ?></td>
            <td><?php echo $produto->validade; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>

