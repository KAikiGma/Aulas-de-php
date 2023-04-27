<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobra o valor</title>
</head>
<body>
    <h1>Dobra o valor</h1>
    <?php
    function dobraValor(&$valor){
        $valor = $valor *2;
    }

    $num = 5;
    dobraValor($num);
    echo $num;

    ?>
</body>
</html>