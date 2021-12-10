<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<form>
    <input type="text" name = "nome">
    <input type="date" name = "nascimento">
    <input type="submit" name = "OK">

</form>
<?php

if (isset($_GET)){
    foreach($_GET as $key => $value){
        echo "Nome do campo: " .$key;

        echo "Valor do campo: ".$value;

        echo "<hr>";
        
    }
}

?>
    
</body>
</html>

