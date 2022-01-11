<?php

    $pessoa = array(
        'nome' => 'Junior',
        'idade' => 25
    );

    foreach ($pessoa as $value){
        if (gettype($value) === 'integer') $value += 1;
        echo $value.'<br>';
    }






?>