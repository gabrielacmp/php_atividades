<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <div>
        <p>
            Exercício 10: Escreva um algoritmo para que solicite o salário e o valor da prestação de um empréstimo pretendido. Seu programa deve exibir uma mensagem se baseando na seguinte estrutura:
            a.	Se a prestação for maior que 20% do salário: “Empréstimo não pode ser concedido”. //
            b.	Se a prestação for igual a 20% do salário: “Empréstimo em analise” //
            c.	Se a prestação for menor que 20% do salário: “Empréstimo pode ser concedido”. 
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div style="margin-bottom: 1%;">
                    <label for="numID">Digite o salário:</label>
                    <br>
                    <input type="text" name="txtNum1" id="numID" required>
                </div>
                <div style="margin-bottom: 2%;">
                    <label for="numID">Digite o valor da prestação:</label>
                    <br>
                    <input type="text" name="txtNum2" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
        <?php
            if($_POST){
                $salario = $_POST['txtNum1'];
                $prestacao = $_POST['txtNum2'];
                $vinte_porcento = $salario*0.2;
                echo "Resposta: ";
                if ($prestacao > $vinte_porcento)
                    echo "Empréstimo não pode ser concedido.";
                elseif ($prestacao < $vinte_porcento)
                    echo "Empréstimo pode ser concedido.";
                else
                    echo "Empréstimo em análise.";  
            }
        ?>
    </div>
</body>
</html>