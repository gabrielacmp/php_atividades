<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <div>
        <p>
            Exercício 02: Elabore um algoritmo para ler um valor inteiro e informar, através de uma mensagem se este valor é um número par ou ímpar.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div style="margin-bottom: 2%;">
                    <label for="numID">Digite um número:</label>
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
                if($num%2==0)
                    echo "O número {$num} é par!";
                else 
                    echo "O número {$num} é ímpar!";
            }
        ?>
    </div>
</body>
</html>