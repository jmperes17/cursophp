<?php

$nome = "Jozé";

$sobrenome = " Junior";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

echo strtoupper($nomeCompleto);

echo strtolower($nomeCompleto);

echo "</br>";

$idade = 17;
$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeMelhor = 65;

if($idade >=18){
    echo "Adulto";
}
elseif($idade <= 17 && $idade > 12){
    echo "Adolescente";

}
else{
    echo "idoso";
}






?>