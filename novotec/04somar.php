<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Somar</title>
</head>
<body>
    <h1>Função somar com e sem retorno</h1>
    <?php
    function somarSemRetorno($a,$b) {
        $r = $a + $b;
        echo $r;
    }
    somarSemRetorno(1,2);
    echo "<br />";

    function somarComRetorno($a,$b) {
        $r = $a + $b;
        return $r;
    }
    echo somarComRetorno(3,4);
    echo "<br />";

    function somarComTipodeDados(float $a, float $b){
        $r = $a + $b;
        return floatval($r);
    }
    echo somarComTipodeDados(5.34,6.45);
    echo "<br />";

    ?>
</body>
</html>