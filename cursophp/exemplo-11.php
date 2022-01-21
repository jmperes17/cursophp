<?php

$json = '{
    "Nome": "Junior",
    "Idade": 25
  }';

$data = json_decode($json, true);

var_dump($data);


