<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If alinhado</title>
</head>
<body>
    <form action="" method="get">
        If alinhado valor1 pra testar: <input type="number" name="number1" /><br />
        If alinhado valor2 pra testar: <input type="number" name="number2" /><br />
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
    if (isset($_GET["number1"]) and (isset($_GET["number2"]))) {
        $numero1 = $_GET["number1"];
        $numero2 = $_GET["number2"];
        if ($numero1>10){
            if ($numero2<5){
            echo 'para passar pela parte 1 o valor1 é maior que 10 e o valor2 é menor que 5';
        } else {
            echo 'para passar pela parte 2 o valor1 é maior que 10 e o valor2 é menor ou igual a 5';
        }
    } else
    if ($numero2<5){
        echo 'para passar pela parte 3 o valor1 é menor ou igual a 10 e o valor2 é menor que 5';
    } else{
        echo 'para passar pela parte 4 o valor1 é menor ou igual a 10 e o valor2 é maior ou igual a 5';
    }
}
?>
</body>
</html>