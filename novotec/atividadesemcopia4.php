<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo de área</h1>

    <form action="atividadesemcopia4.php">

    <p>Digite a altura: <input type="text" name="alt"></p>
    <p>Digite a largura: <input type="text" name="larg"></p>

    <p><input value="Calcular" type="submit"></p>
    </form>

    <?php
    if (isset($_REQUEST["alt"]) and (isset($_REQUEST["larg"]))) {
        $alt = $_REQUEST["alt"];
        $larg = $_REQUEST["larg"];

        $area = $alt * $larg;
        echo "<p>" . "A area é ".  $area. "</p>";

        if($alt == $larg) {
            echo "<img src='/imagens/quadrado.jpg'>";
        } else {
            echo "<img src='/imagens/retângulo.jpg'>";
        }
    }

?>
</body>
</html>