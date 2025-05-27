<?php

    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $altura = $_GET['altura'];
    $area = ($valor1 + $valor2) * $altura / 2;

    echo "A área é " . $area;
?>