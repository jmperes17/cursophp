<?php

include_once "db.php";


$query = 'SELECT * FROM produtos';

/* executar a consulta e testar se ocorreu erro */
if (!$resultado = $conexao->query($query)) {
    echo ' Falha na consulta: '. $conexao->error;
    $conexao->close();  /* fechar a ligação */
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    while ($row = $resultado->fetch_assoc()){   
        echo "Id: " . $row['id_produto']. "<br>" . " Nome: " . $row['nome_produto'] ."<br>" .
         "Data de cadastro: ". $row['data_cadastro'] . "<br>" . "Quantidade ". $row['qtd_produto'] . "<br>";

         $data = $row;
         

         
    }
}


?>



   
    
    <h4 class="titulo">Cadastro de Produtos - Keener.Io</h4>
    <hr></hr>
    <br><br>
    <label>Id</label><br>
    <input type="text" name="name" value="<?=htmlspecialchars($data['id_produto'])?>" required/><br>

    <label>Nome do produto</label><br>
    <input type="text" name="name" value="<?=htmlspecialchars($data['nome_produto'])?>" required/><br>

    <label>Data de Cadastro</label><br>
    <input type="text" name="name" value="<?=htmlspecialchars($data['data_cadastro'])?>" required/><br>

    <label>Quantidade</label><br>
    <input type="text" name="name" value="<?=htmlspecialchars($data['qtd_produto'])?>" required/><br>
           
            


       






