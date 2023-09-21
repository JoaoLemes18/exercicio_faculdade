<!DOCTYPE html>
<html>
<head>
    <title>Salário do Vendedor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Salário do Vendedor</h1>
        <form method="post">
            <label for="carros_vendidos">Número de Carros Vendidos:</label>
            <input type="number" name="carros_vendidos" id="carros_vendidos" required>
            <label for="valor_vendas">Valor Total das Vendas:</label>
            <input type="number" name="valor_vendas" id="valor_vendas" required>
            <label for="salario_fixo">Salário Fixo:</label>
            <input type="number" name="salario_fixo" id="salario_fixo" required>
            <label for="comissao_por_carro">Comissão por Carro Vendido:</label>
            <input type="number" name="comissao_por_carro" id="comissao_por_carro" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $carros_vendidos = $_POST["carros_vendidos"];
            $valor_vendas = $_POST["valor_vendas"];
            $salario_fixo = $_POST["salario_fixo"];
            $comissao_por_carro = $_POST["comissao_por_carro"];
            
            $salario_final = $salario_fixo + ($carros_vendidos * $comissao_por_carro) + ($valor_vendas * 0.05);
            
            echo "<p>O salário final do vendedor é: R$ $salario_final</p>";
        }
        ?>
    </div>
</body>
</html>
