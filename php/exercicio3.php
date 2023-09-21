<!DOCTYPE html>
<html>
<head>
    <title>Percentual de Votos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Percentual de Votos</h1>
        <form method="post">
            <label for="eleitores">Total de Eleitores:</label>
            <input type="number" name="eleitores" id="eleitores" required>
            <label for="brancos">Votos Brancos:</label>
            <input type="number" name="brancos" id="brancos" required>
            <label for="nulos">Votos Nulos:</label>
            <input type="number" name="nulos" id="nulos" required>
            <label for="validos">Votos Válidos:</label>
            <input type="number" name="validos" id="validos" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $eleitores = $_POST["eleitores"];
            $brancos = $_POST["brancos"];
            $nulos = $_POST["nulos"];
            $validos = $_POST["validos"];
            
            $percentualBrancos = ($brancos / $eleitores) * 100;
            $percentualNulos = ($nulos / $eleitores) * 100;
            $percentualValidos = ($validos / $eleitores) * 100;
            
            echo "<p>Percentual de votos em relação ao total de eleitores:</p>";
            echo "<p>Votos Brancos: $percentualBrancos%</p>";
            echo "<p>Votos Nulos: $percentualNulos%</p>";
            echo "<p>Votos Válidos: $percentualValidos%</p>";
        }
        ?>
    </div>
</body>
</html>
