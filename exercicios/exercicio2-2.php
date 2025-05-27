<?php
    $comprimento = $_GET['comprimento'];
    $largura = $_GET['largura'];
    $altura = $_GET['altura'];
    $volume = $comprimento * $largura * $altura;

    echo "O volume é " . $volume;
?>