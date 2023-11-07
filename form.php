<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <style>
        .form{
            border: 3px solid black;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 200px;
            margin-left: 500px;
            margin-top: 50px;


        }
    </style>
    
    <form action="./ex4.php" method="post">
        <div class="form">
            <h1>xD</h1>
            <input type="text" name="prato" id="prato" placeholder="xDDD">
            <input type="number" name="peso" id="peso" min="0.2" max="5" step=".1">
            <br><input type="submit" value="Calcular">
            <br><input type="reset" value="Limpar">
        </div>  
    </form>
    <?php
        
    ?>
</body>
</html>