<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
</head>
<body>
    <form action="" method="post">
        <div class="form">
            <h1>ApostaFlix</h1>
            <input type="text" name="TimeA" placeholder="TIME A">
            <input type="number" name="golsA" placeholder="gols">
            X
            <input type="number" name="golsB" placeholder="gols">
            <input type="text" name="TimeB" placeholder="TIME B"><br><br>
            <input type="submit" value="Exibir Resultados">
            <input type="reset" value="Limpar"><br><br>

        </div>  
    </form>
    <?php
        if(!empty($_POST['TimeA']) && !empty($_POST['TimeB']) && !empty($_POST['golsA']) && !empty($_POST['g    olsB'])){
            $golsA = $_POST['golsA'];
            $golsB = $_POST['golsB'];
            $timeA = $_POST['TimeA'];
            $timeB = $_POST['TimeB'];
            if($golsA > $golsB){
                echo"$timeA venceu de $golsA x $golsB";
            }else if($golsA == $golsB){
                echo"Empate";
            }else{
                echo"$timeB venceu de $golsB x $golsA";
            }
        }else{
            echo"Informe os dados Necessarios!";
        }
    ?>
</body>
</html>