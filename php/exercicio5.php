<!DOCTYPE html>
<html>
<head>
    <title>Custo de Carro ao Consumidor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Custo de Carro ao Consumidor</h1>
        <form method="post">
            <label for="custo_fabrica">Custo de Fábrica:</label>
            <input type="number" name="custo_fabrica" id="custo_fabrica" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $custo_fabrica = $_POST["custo_fabrica"];
            
            $percentual_distribuidor = 28;
            $percentual_impostos = 45;
            
            $custo_consumidor = $custo_fabrica + ($custo_fabrica * ($percentual_distribuidor / 100)) + ($custo_fabrica * ($percentual_impostos / 100));
            
            echo "<p>O custo final ao consumidor é: R$ $custo_consumidor</p>";
        }
        ?>
    </div>
</body>
</html>
