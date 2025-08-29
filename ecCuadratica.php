<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST["tipo"];
    $v1 = $_POST["valor1"];
    $v2 = isset($_POST["valor2"]) ? $_POST["valor2"] : null;
    $v3 = isset($_POST["valor3"]) ? $_POST["valor3"] : null;
    $resultado = "";

    switch ($tipo) {
        case "ecuacion":
            $a = $v1;
            $b = $v2;
            $c = $v3;

            if ($a == 0) {
                $resultado = "<span class='error'>Error: 'a' no puede ser 0.</span>";
            } else {
                $discriminante = $b*$b - 4*$a*$c;
                if ($discriminante > 0) {
                    $x1 = (-$b + sqrt($discriminante)) / (2*$a);
                    $x2 = (-$b - sqrt($discriminante)) / (2*$a);
                    $resultado = "Raíces reales: x₁ = $x1, x₂ = $x2";
                } elseif ($discriminante == 0) {
                    $x = -$b / (2*$a);
                    $resultado = "Raíz doble: x = $x";
                } else {
                    $real = -$b / (2*$a);
                    $imag = sqrt(-$discriminante) / (2*$a);
                    $resultado = "Raíces complejas: x₁ = $real + {$imag}i, x₂ = $real - {$imag}i";
                }
            }
            break;

        case "raiz":
            if ($v1 >= 0) {
                $resultado = "√$v1 = " . sqrt($v1);
            } else {
                $resultado = "<span class='error'>Error: No se puede calcular la raíz de un número negativo</span>";
            }
            break;

        case "potencia":
            if ($v2 !== null) {
                $resultado = "$v1 ^ $v2 = " . pow($v1, $v2);
            } else {
                $resultado = "<span class='error'>Error: Falta el exponente</span>";
            }
            break;

        default:
            $resultado = "<span class='error'>Operación no válida.</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Cálculos Avanzados</title>
    <link rel="stylesheet" href="style.css">
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

