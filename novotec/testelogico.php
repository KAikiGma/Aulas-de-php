<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes Lógicos</title>
</head>
<body>
    <form action="" method="get">
        Comparações lógicas no php: <input type="text" name="valor" /><br />
        <input type="submit" name="submit" value="Comparar" />
    </form>

    <?php
    if (isset($_GET["valor"])) {
        $valoratestar = $_GET["valor"];
        $compara2iguaiscom1 = ($valoratestar==1);
        echo $valoratestar. ' comparando com 2 iguais o valor com o número 1 dá'. $compara2iguaiscom1. ','. '<br />' . PHP_EOL;
        $compara3iguaiscom1 = ($valoratestar===1);
        echo $valoratestar. 'comparando com 3 iguais o valor do número 1 dá'. $compara3iguaiscom1. ','. '<br />'. PHP_EOL;
        $compara2iguaiscomfoo = ($valoratestar=="foo");
        echo $valoratestar. ' comparando com 2 iguais o valor da string foo dá'. $compara2iguaiscomfoo. ','. '<br />'. PHP_EOL;
        $compara3iguaiscomfoo = ($valoratestar==="foo");
        echo $valoratestar. 'comparando com 3 iguais coma a string foo dá'. $compara3iguaiscomfoo. ','. '<br />'. PHP_EOL;
    }

    ?>
</body>
</html>