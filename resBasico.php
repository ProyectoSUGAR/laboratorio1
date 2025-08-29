<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operacion"];
    $resultado = 0;

    switch ($op) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "*":
            $resultado = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "<span class='error'>Error: División por cero</span>";
            }
            break;
        default:
            $resultado = "<span class='error'>Operación no válida</span>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Calculadora Básica</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <div class="container">
        <div class="result-container">
            <h2>Resultado:</h2>
            <div class="result"><?php echo $resultado; ?></div>
            <form action="index.php" method="get">
                <button type="submit" class="back-btn">Volver</button>
            </form>
        </div>
    </div>
</body>
</html>



