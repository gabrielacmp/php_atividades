<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <div>
        <p>
            Exercício 03: Implemente um programa que leia dois valores inteiros e verificar se o primeiro é múltiplo do segundo, seu programa deverá exibir a mensagem: “São múltiplos” ou “Não são múltiplos” dependendo da condição.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div style="margin-bottom: 1%;">
                    <label for="numID">Digite um número:</label>
                    <br>
                    <input type="text" name="txtNum1" id="numID" required>
                </div>
                <div style="margin-bottom: 2%;">
                    <label for="numID">Digite outro número:</label>
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
                if(($num1%$num2)==0)
                    echo "São múltiplos";
                else
                    echo "Não são múltiplos";
            }
        ?>
    </div>
</body>
</html>