<html>
<body>
    <form action="">
        <label for="distancia">Coloque a distância total percorrida(em km)</label>
        <input type="text" name="distancia" id="distancia"><br>
        <label for="combustivel">Coloque a quantidade de combustível usado(em litros)</label>
        <input type="text" name="combustivel" id="combustivel"><br>
        <input type="submit">
    </form> 
</body>
</html>
<?php

    $distancia = $_GET['distancia'];
    $combustivel = $_GET['combustivel'];
    $consumo_medio = $distancia / $combustivel;

    echo "O volume é " . $consumo_medio;
?>