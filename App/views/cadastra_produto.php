<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../../public/assets/css/cadastro_produto.css" />
</head>
<body>
  <div class="content">      
    <div id="container">
      <form method="post" action="../../index.php?acao=cad-prod"> 
        <h1>Novo Produto:</h1> 
          
        <p> 
          <label for="nome_prod">Nome:</label>
          <input id="nome_prod" name="nome_prod" required="required" type="text" placeholder="Nome" />
        </p>
          
        <p> 
          <label for="preco_prod">Preço:</label>
          <input id="preco_prod" name="preco_prod" required="required" type="text" placeholder="Preço"/> 
        </p>
          
        <p> 
          <label for="marca_prod">Marca:</label>
          <input id="marca_prod" name="marca_prod" required="required" type="text" placeholder="Marca"/>
        </p>
        
        <p> 
          <label for="dt_validade">Data de Validade:</label>
          <input id="dt_validade" name="dt_validade" required="required" type="date" placeholder="Data de Validade"/>
        </p>

        <p> 
          <input type="submit" value="Cadastrar Produto"/> 
        </p>
      </form>
    </div>
  </div>  
</body>
</html>


    
