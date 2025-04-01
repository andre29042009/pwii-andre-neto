<?php
    $x = "Hello World!";
    $y = "Hello World!";

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = 12;
    var_dump($x);
    echo "<br>";

    $y = ['Andre', 'Garrido', 27] ;
    var_dump($y);
    echo "<br>";
    echo $y[1];

    $meuObj = new stdClass();
    $meuObj -> nome = "Andre";
    $meuObj -> idade = 15;
    $meuJson = json_encode($meuObj);

    echo $meuJson;
    echo "<br>";
    var_dump($meuJson);
?>