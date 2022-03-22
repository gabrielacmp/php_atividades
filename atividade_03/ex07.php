<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <div>
        <p>
            Exercício 07: Efetuar a leitura de dois números inteiros e apresentar a relação existente entre eles, ou seja:
            a.	O primeiro é maior que o segundo //
            b.	São iguais //
            c.	O segundo maior que o primeiro.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div>
                    <label for="numID">Digite um número:</label>
                    <br>
                    <input type="text" name="txtNum1" id="numID" required>
                </div>
                <div>
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
            if($num1>$num2)
                echo "O primeiro número ({$num1}) é maior que o segundo ({$num2}).";
            elseif($num2>$num1)
                echo "O segundo número ({$num2}) é maior que o primeiro número ({$num1}).";
            else
                echo "Os números N={{$num1},{$num2}} são iguais.";
        }
        ?>
    </div>
</body>
</html>