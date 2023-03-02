<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos de preços</title>
</head>
<body>
<h1>Calculos de preços</h1>

<form action="atividadesemcopia2.php" method="post">

<p>Digite o nome do produto: <input type="text" name="nome" required></p>
<p>Digite o preço unitario: <input type="text" name="preco" required></p>
<p>Digite a quantidade: <input type="text" name="quant" required></p>
<p>Digite o desconto: <input type="text" name="desc" required></p>

<p><input value="Calcular" type="submit"></p>
</form>

<?php

if ((isset($_REQUEST["nome"])) and (isset($_REQUEST["preco"])) and (isset($_REQUEST["quant"])) and (isset($_REQUEST["desc"]))) {

    $numb1 = $_REQUEST["nome"];
    $numb2 = $_REQUEST["preco"];
    $numb3 = $_REQUEST["quant"];
    $numb4 = $_REQUEST["desc"];

    $total = ($numb3 * $numb2) - $numb4;

    echo "<p>" ."o preço final é ". $total; 
}

?>
</body>
</html>