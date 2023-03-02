<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méia de numeros</title>
</head>
<body>
    <h1>Média de números</h1>

    <form action="atividadesemcopia1.php" method="post">

    <p>Digite o primeiro número: <input type="text" name="numb1" required></p>
    <p>Digite o segundo número: <input type="text" name="numb2" required></p>
    <p>Digite o terceiro número: <input type="text" name="numb3" required></p>
    <p>Digite o quarto número: <input type="text" name="numb4" required></p>

    <p><input value="Calcular" type="submit"></p>
    </form>

    <?php

    if ((isset($_REQUEST["numb1"])) and (isset($_REQUEST["numb2"])) and (isset($_REQUEST["numb3"])) and (isset($_REQUEST["numb4"]))) {

        $numb1 = $_REQUEST["numb1"];
        $numb2 = $_REQUEST["numb2"];
        $numb3 = $_REQUEST["numb3"];
        $numb4 = $_REQUEST["numb4"];

        $med = ($numb1 + $numb2 + $numb3 + $numb4) / 4;
        echo "<p>" ."a média é ". $med; 
    }

    ?>
</body>
</html>