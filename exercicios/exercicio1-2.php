<?php

    $distancia = $_GET['distancia'];
    $combustivel = $_GET['combustivel'];
    $consumo_medio = $distancia / $combustivel;

    echo "O volume é " . $consumo_medio;
?>