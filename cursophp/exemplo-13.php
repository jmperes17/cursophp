<?php

session_start();

session_unset('nome');
echo $_SESSION['nome'] = 'teste';





?>