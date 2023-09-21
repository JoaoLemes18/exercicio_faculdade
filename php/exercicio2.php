<!DOCTYPE html>
<html>
<head>
    <title>Área de um Retângulo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Área de um Retângulo</h1>
        <form method="post">
            <label for="base">Base:</label>
            <input type="number" name="base" id="base" required>
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST["base"];
            $altura = $_POST["altura"];
            $area = $base * $altura;
            echo "<p>A área do retângulo é $area.</p>";
        }
        ?>
    </div>
</body>
</html>
