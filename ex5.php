<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>

<body>
    <h1>Resultado do Jogo:</h1>

    <?php
    $nomeTime1 = 'Inter';
    $nomeTime2 = 'Grêmio';
    $gols1 = 2;
    $gols2 = 2;

    if ($gols1 > $gols2) {
        echo "$nomeTime1 Venceu a partida ($nomeTime1 $gols1 x $gols2 $nomeTime2)";
    } else if ($gols1 < $gols2) {
        echo "$nomeTime2 Venceu a partida ($nomeTime2 $gols2 x $gols1 $nomeTime1)";
    } else {
        echo "A partida terminou em Empate ($nomeTime1 $gols1 x $gols2 $nomeTime2)";
    }
    ?>
</body>

</html>