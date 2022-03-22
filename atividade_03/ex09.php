<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <div>
        <p>
            Exercício 09: Desenvolva um programa para ler o numerador e denominador de uma divisão e realiza-la verificando a “divisão por zero”.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div style="margin-bottom: 1%;">
                    <label for="numID">Digite o numerador:</label>
                    <br>
                    <input type="text" name="txtNum1" id="numID" required>
                </div>
                <div style="margin-bottom: 2%;">
                    <label for="numID">Digite o denomidador:</label>
                    <br>
                    <input type="text" name="txtNum2" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
        <?php
            if($_POST){
                $num1 = $_POST['txtNum1'];
                $num2 = $_POST['txtNum2'];
                echo "Resposta: ";
                if($num2 != 0){
                    $divisao = $num1/$num2;
                    echo "A divisão é {$num1}/{$num2} = {$divisao}.";
                } else{
                    echo "Não foi possível calcular a divisão, pois o denominador tem que ser diferente se zero.";
                }
            }
        ?>
    </div>
</body>
</html>