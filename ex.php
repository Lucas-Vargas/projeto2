<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>
<body>
    <h1>Classificação do Nadador:</h1>
    <form action="" method="post">
        <div class="form">
            <input type="number" name="idade" id="idade" placeholder="Informe a Idade do Nadador">
            <br><input type="submit" value="Calcular">
            <br><input type="reset" value="Limpar"><br><br>
        </div>  
    </form>
    <?php
    if(!empty($_POST['idade'])){
        $idadeDoNadador = $_POST['idade'];
        switch($idadeDoNadador){
            case ($idadeDoNadador >=5 && $idadeDoNadador<=7): echo"Infantil A";
            break;
            case ($idadeDoNadador >=8 && $idadeDoNadador<=10): echo"Infantil B";
            break;
            case ($idadeDoNadador >=11 && $idadeDoNadador<=13): echo"Juvenil A";
            break;
            case ($idadeDoNadador >=14 && $idadeDoNadador<=17): echo"Juvenil B";
            break;
            case ($idadeDoNadador >=18 && $idadeDoNadador < 120 ): echo"Adulto";
            break;
            case ($idadeDoNadador >120 ): echo"Ja não ta na hora de dormi não?";
            break;
            default: echo "Incapaz de Competir";

        }
        }else{
            echo"";
        }

    ?>
</body>
</html>