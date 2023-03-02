<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de dado</title>
</head>
<body>
    <h1>Lançamento de dado</h1>

    <form action="atividadesemcopia3.php" method="post">
        <p>Digite quantas vezes o dado mostrará um número: <input type="number" name="quant"></p>

        <p><input value="Sortear" type="submit"></p>
    </form>

    <?php

    if (isset($_REQUEST["quant"])) {
        $quant = $_REQUEST["quant"];

        for ($i = 1 ; $i <= $quant ; $i++) {

        $lado = rand (1, 6);

        echo "<img src='imagens/dado". $lado.".png'>"; 
    }
}

?>
</body>
</html>