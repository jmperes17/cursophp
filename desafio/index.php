<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet">
    
    

    <title>Cadastro</title>
  </head>
  <body>
    <h4 class="titulo">Cadastro de Produtos - Keener.Io</h4>
    <hr></hr>
    <div class="login">
        <p> Entre com suas credenciais para acesso à pagina de produtos </p><br>

        <form action="produtos.php" class="form-login">
        
          <i class="fa fa-user"></i>
          <label>Login</label>
          <input type= "name" id="name" required><br>
          <label>Senha</label>
          <input type= "senha" id="senha" required><br><br>
          <button type="submit" class="button">Entrar</button><br>
          <p> Não tem acesso ainda ? Realize cadastro clicando no link abaixo:</p><br>
          <a href="cadastro.html" name="cadastro">Cadastro</a>

        </form>



    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>