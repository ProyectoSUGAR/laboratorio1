<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = $_POST["figura"];
    $v1 = $_POST["valor1"];
    $v2 = isset($_POST["valor2"]) ? $_POST["valor2"] : null;
    $resultado = "";
    $formula = "";

    switch ($figura) {
        case "cuadrado":
            if ($v1 > 0) {
                $area = $v1 * $v1;
                $resultado = "Área del cuadrado: $area";
                $formula = "Fórmula: lado × lado = $v1 × $v1";
            } else {
                $resultado = "<span class='error'>Error: El lado debe ser mayor que 0</span>";
            }
            break;

        case "rectangulo":
            if ($v1 > 0 && $v2 > 0) {
                $area = $v1 * $v2;
                $resultado = "Área del rectángulo: $area";
                $formula = "Fórmula: base × altura = $v1 × $v2";
            } else {
                $resultado = "<span class='error'>Error: Base y altura deben ser mayores que 0</span>";
            }
            break;

        case "circulo":
            if ($v1 > 0) {
                $area = round(pi() * $v1 * $v1, 2);
                $resultado = "Área del círculo: $area";
                $formula = "Fórmula: π × radio² = π × $v1²";
            } else {
                $resultado = "<span class='error'>Error: El radio debe ser mayor que 0</span>";
            }
            break;

        case "triangulo":
            if ($v1 > 0 && $v2 > 0) {
                $area = ($v1 * $v2) / 2;
                $resultado = "Área del triángulo: $area";
                $formula = "Fórmula: (base × altura) ÷ 2 = ($v1 × $v2) ÷ 2";
            } else {
                $resultado = "<span class='error'>Error: Base y altura deben ser mayores que 0</span>";
            }
            break;

        default:
            $resultado = "<span class='error'>Figura no válida</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Áreas Geométricas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="result-container">
            <h2>Resultado:</h2>
            <div class="result"><?php echo $resultado; ?></div>
            <?php if (!empty($formula)): ?>
            <div class="formula-info">
                <p><?php echo $formula; ?></p>
            </div>
            <?php endif; ?>
            <form action="index.php" method="get">
                <button type="submit" class="back-btn">Volver</button>
            </form>
        </div>
    </div>
</body>
</html>


