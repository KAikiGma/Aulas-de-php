<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reajuste de salário</h1>

    <form action="" method="post">
        <p>Digite sua classe social: <input type="text" name="classe"></p>
        <p>Digite seu salário: <input type="number" name="salario"></p>

        <p><input value="Calcular" type="submit"></p>
    </form>

    <?php

    if (isset($_REQUEST["classe"]) and (isset($_REQUEST["salario"]))) {

        $classe = $_REQUEST["classe"];
        $salario = $_REQUEST["salario"];

        if (($classe == "a") or ($classe == "A") or ($classe == "c") or ($classe == "C")) {
            $reajuste = $salario * 1.10;
            echo "<p>". "o seu salário é ". $salario. " e o reajuste foi de ". $reajuste. "</p>";
        } else if  (($classe == "b") or ($classe == "B") or ($classe == "d") or ($classe == "D") or ($classe == "e") or ($classe == "E")) {
                $reajuste = $salario * 1.15;
                echo "<p>". "o seu salário é ". $salario. " e o reajuste foi de ". $reajuste. "</p>";
        } else if (($classe == "f") or ($classe == "F") or ($classe == "l") or ($classe == "L")) {
            $reajuste = $salario * 1.25;
            echo "<p>". "o seu salário é ". $salario. " e o reajuste foi de ". $reajuste. "</p>"; 
    } else if (($classe == "g") or ($classe == "G") or ($classe == "h") or ($classe == "H")) {
        $reajuste = $salario * 1.35;
        echo "<p>". "o seu salário é ". $salario. " e o reajuste foi de ". $reajuste. "</p>";
} else if (($classe == "i") or ($classe == "I") or ($classe == "j") or ($classe == "J")) {
    $reajuste = $salario * 1.50;
    echo "<p>". "o seu salário é ". $salario. " e o reajuste foi de ". $reajuste. "</p>";
    }
}
    ?>
</body>
</html>