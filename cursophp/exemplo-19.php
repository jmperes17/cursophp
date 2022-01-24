<?php

 $dt = new DateTime();

 $periodo = new DateInterval("P10D"); // Cria um periodo de 10 dias

 echo $dt->format('d/m/Y H:i:s'); // Instancia o formato da data com dia/mês/hora e Hora:minuto:segundos

 $dt->add($periodo); // Soma o datetime com o periodo

 echo "<br>"."<hr>";

 echo $dt->format("d/m/Y H:i:s");

