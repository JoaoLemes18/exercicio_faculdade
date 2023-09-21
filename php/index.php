<!DOCTYPE html>
<html>
<head>
    <title>Antecessor de um Valor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Antecessor de um Valor</h1>
        <form method="post">
            <label for="valor">Digite um valor:</label>
            <input type="number" name="valor" id="valor" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["valor"];
            $antecessor = $valor - 1;
            echo "<p>O antecessor de $valor é $antecessor.</p>";
        }
        ?>
    </div>
</body>
</html>
