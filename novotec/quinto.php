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

    Números pares até dez:

    <?php

    $i = 2;

    do {
        echo $i. ",";

        $i = $i + 2;
    } while ($i <= 10);

    ?>
</body>
</html>