<!DOCTYPE html>
<html>
<head>
    <title>Reajuste de Salário</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Reajuste de Salário</h1>
        <form method="post">
            <label for="salario_atual">Salário Atual:</label>
            <input type="number" name="salario_atual" id="salario_atual" required>
            <label for="percentual_reajuste">Percentual de Reajuste:</label>
            <input type="number" name="percentual_reajuste" id="percentual_reajuste" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario_atual = $_POST["salario_atual"];
            $percentual_reajuste = $_POST["percentual_reajuste"];
            
            $novo_salario = $salario_atual + ($salario_atual * ($percentual_reajuste / 100));
            
            echo "<p>O novo salário é: R$ $novo_salario</p>";
        }
        ?>
    </div>
</body>
</html>
