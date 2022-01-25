<?php

include_once "../model/db.php";


$query = 'SELECT * FROM usuarios';

/* executar a consulta e testar se ocorreu erro */
if (!$resultado = $conexao->query($query)) {
    echo ' Falha na consulta: '. $conexao->error;
    $conexao->close();  /* fechar a ligação */
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    while ($row = $resultado->fetch_assoc()){   
        echo "id: " . $row['id_usuario'] . " Nome: " . $row['nome_usuario'] ."<br>" .
         "Email: ". $row['email'] . "<br>" . "Status ". $row['status_usuario'] . "<br>";
    }
}
    