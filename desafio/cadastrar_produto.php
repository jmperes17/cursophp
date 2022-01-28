<?php include_once "menu.html" ?>
<!doctype html>
<html lang="pt">
  <head>
    
  </head>
  <body>
      <h4 class="titulo"> Cadastro de Produtos - Keener.Io </h4>
      <hr>
    
            <div>
                <form action="insere_usuario.php" method="post">
                    <div class="form-group" id="nome">
                        <label for="">Nome</label>
                        <input type="text" name="nome" required class="form-control">
                    </div>

                    <div class="form-group" id="email">
                        <label for="">Email</label>
                        <input type="email" name="email" required class="form-control" >
                    </div>

                    <div class="form-group" id="telefone">
                        <label for="">Telefone</label>
                        <input type="phone" name="telefone" required class="form-control">
                    </div>

                    <div class="form-group" id="usuario">
                        <label for="">Usuario</label>
                        <input type="text" name="usuario" required class="form-control">
                    </div>

                    <div class="form-group" id="botao">
                        <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
                        
                    </div>

                    
                </form>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    !-->
  </body>
</html>