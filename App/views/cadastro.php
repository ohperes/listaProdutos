<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../../public/assets/css/cadastro.css" />
</head>
<body>
  <div class="content">      
    <div id="container">
      <form method="post" action=""> 
        <h1>Cadastro</h1> 
          
        <p> 
          <label for="nome_cad">Seu nome</label>
          <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome" />
        </p>
          
        <p> 
          <label for="email_cad">Seu e-mail</label>
          <input id="email_cad" name="email_cad" required="required" type="email" placeholder="E-mail"/> 
        </p>
          
        <p> 
          <label for="senha_cad">Sua senha</label>
          <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Senha"/>
        </p>
          
        <p> 
          <input type="submit" value="Cadastrar"/> 
        </p>
          
        <p class="link">  
          Já é cadastrado?
          <a href="#paralogin"> Fazer Login </a>
        </p>
      </form>
    </div>
  </div>  
</body>
</html>


    
