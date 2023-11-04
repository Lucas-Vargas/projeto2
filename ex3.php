<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>

<body>
    <h1>Rifa</h1>
    <table border='1'>
        <?php
        for ($count = 1; $count <= 1000; $count++) {
            echo "<tr>
                <td>
                    Nº $count<br>
                    Nome:<br>
                    Valor R$2,00<br>
                </td>
                <td>
                    <h1>ação entre Amigos</h1>
                    <h2>Premio: XD</h2>
                    <h2>Data: 12/02</h2>
                    <h2>valor R$2,00</h2>
                </td>
            </tr>";

        }
        ?>
    </table>
</body>

</html>