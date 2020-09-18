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
</head>
<body>
  <div id="container"> 
    <nav id="menu">
      <ul>
          <li><label id="title" >* ULTRA Mercado</label></li>
          <li><a href="#">Sair</a></li>
      </ul>
    </nav>   
    <nav id="sub-nav">
      <ul>
        <li>
          <input id="pesquisa-input" name="pesquisa" required="required" type="text" placeholder="Pesquisar..."/>
          <input id="pesquisa-btn" type="submit" value="Pesquisar"/> 
        </li>
        <li>
          <a href="../../index.php?acao=form-prod"><button id="cadastra-produto">Novo Produto</button></a>
        </li>
      </ul>
    </nav>
    <table id="tabela_produtos">
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Marca</th>
        <th>Validade</th>
      </tr>
        <?php foreach($produtos as $produto): ?>
          <tr>
            <td><?php echo $produto->nome; ?></td>
            <td><?php echo $produto->preco; ?></td>
            <td><?php echo $produto->marca; ?></td>
            <td><?php echo $produto->validade; ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>  
</body>
</html>