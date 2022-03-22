<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <div>
        <p>
            Exercício 08: Um ano é bissexto se for divisível por 4 e não for divisível por 100. Também são bissextos os divisíveis por 400. Desenvolva um programa para determinar se um ano informado é bissexto.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div style="margin-bottom: 2%;">
                    <label for="numID">Digite o ano:</label>
                    <br>
                    <input type="text" name="txtNum" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
        <?php
            if($_POST){
                $num = $_POST['txtNum'];
                echo "Resposta: ";
                if(($num%4==0) || ($num%400==0)){
                    echo "O ano {$num} é bissexto!";
                } else{
                    echo "O ano {$num} não é bissexto!";
                }
            }
        ?>
    </div>
</body>
</html>