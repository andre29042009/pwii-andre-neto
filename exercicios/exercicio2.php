<html>
<body>
    <form action="">
        <label for="comprimento">Coloque o comprimento</label>
        <input type="text" name="comprimento" id="comprimento"><br>
        <label for="largura">Coloque a largura</label>
        <input type="text" name="largura" id="largura"><br>
        <label for="altura">Coloque a altura</label>
        <input type="text" name="altura" id="altura"><br>
        <input type="submit">
    </form> 
</body>
</html>
<?php

    $comprimento = $_GET['comprimento'];
    $largura = $_GET['largura'];
    $altura = $_GET['altura'];
    $volume = $comprimento * $largura * $altura;

    echo "O volume é " . $volume;
?>