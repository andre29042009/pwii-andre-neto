<?php
    $produto = $_GET['produto'];
    $juros = 16;
    $valor_final = (($juros / 100) * $produto) + $produto;
    $parcelas = $valor_final / 10;

    echo "O valor da parcela é " . $parcelas . "<br>";
    echo "O valor final é " . $valor_final;
?>