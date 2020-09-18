<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../../public/assets/css/cadastro.css" />
</head>
<body>
  <div class="content">      
    <div id="container">
      <form method="post" action="../../index.php?acao=login"> 
        <h1>Login</h1> 
             
        <p> 
          <label for="email_login">Seu e-mail</label>
          <input id="email_login" name="email_login" required="required" type="email" placeholder="E-mail"/> 
        </p>
          
        <p> 
          <label for="senha_login">Sua senha</label>
          <input id="senha_login" name="senha_login" required="required" type="password" placeholder="Senha"/>
        </p>
          
        <p> 
          <input type="submit" value="Logar"/> 
        </p>
          
        <p class="link">  
          Não possui cadastro?
          <a href="../../index.php?acao=form-user"> Cadastrar-se </a>
        </p>
      </form>
    </div>
  </div>  
</body>
</html>


    
