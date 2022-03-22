<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <div>
        <p>
            Exercício 06: Desenvolva um programa para ler dois valores inteiros e apresentar a adição destes valores quando o x > y, caso contrário, deve ser efetuado a multiplicação deles.
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
                if($num1>$num2){
                    $resultado = $num1+$num2;
                    echo "{$num1} é maior que {$num2}, então a soma deles deu {$resultado}.";
                } else {
                    $resultado = $num1*$num2;
                    echo "{$num2} é maior que {$num1}, então a multiplicação deles deu {$resultado}.";
                }
            }
        ?>
    </div>
</body>
</html>