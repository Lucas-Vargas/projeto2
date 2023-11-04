<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>
    <?php
        $pesoDoPrato = 0.2;
        $peso = 1.2;
        $precoDoQuilo = 21.50;

        $precoFinal = ($peso - $pesoDoPrato)*$precoDoQuilo;

        echo"O valor a ser Pago será de R$$precoFinal";
    ?>
</body>
</html>