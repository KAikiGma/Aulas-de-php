<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function olaMundo() {
        echo "Olá Mundo!"."<br />";
    }

    olaMundo();
    $num_max=5;
    $delay=1;
    for($i=1;$i<=$num_max;$i++){
        olaMundo();
        sleep($delay);
    }

    function olaMundo2() {
        echo "Olá Mundo2!"."<br />";
        olaMundo3();
      }
      
      function olaMundo3() {
        echo "Olá Mundo3!"."<br />";
      }
      
      olaMundo2();

    ?>
</body>
</html>