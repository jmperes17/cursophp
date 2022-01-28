<?php include_once "menu.html"; ?>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <h4 class="titulo">Usuarios - Keener.Io</h4>
    <hr></hr>
    <br><br>
    <div class="produto">
       

        <table class="tabela" width="800" border="2px" cellpadding = "5px" cellspacing = "2px" align="center" >
              <thead>
                <tr>  
                  <th> ID  </th>
                  <th> Nome </th>
                  <th> Login </th>
                  <th> Senha </th>
                </tr>
              </thead>
    </div>

              <tbody>
                <?php
                    include_once "db.php";

                    $query = 'SELECT * FROM usuarios';
                    /* executar a consulta e testar se ocorreu erro */
                    if (!$resultado = $conexao->query($query)) {
                        echo ' Falha na consulta: '. $conexao->error;
                        $conexao->close();  /* fechar a ligação */
                    }
                    else{
                    /* percorrer os registos (linhas) da tabela e mostrar na página */
                    while ($row = $resultado->fetch_assoc()){   
                    $data = $row;

                ?> 
                <tr>
                  <td><?php echo $row['id_usuario']; ?></td>
                  <td><?php echo $row['nome_usuario']; ?></td>
                  <td><?php echo $row['login']; ?></td>
                  <td><?php echo $row['senha']; ?></td>
                  
                </tr>
                <?php

                  }
                }
                ?>
               
              </tbody>
        </table>

    


 
</html>
           
            


       






