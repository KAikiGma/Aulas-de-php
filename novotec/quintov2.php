<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle</title>
</head>
<body>
    <h1>do / while</h1>

    Números multiplos de 5 em ordem decrescente começando do 200:

    <?php

    $i = 200;

    do {
        echo $i. ",";

        $i = $i - 5;
    } while ($i >= 0);

    ?>
</body>
</html>