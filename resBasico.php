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
                $resultado = "Error: División por cero";
            }
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }
    echo "<h1>Resultado: $resultado</h1>";
}
?>

<button type="button" onclick="javascript:history.back()">Volver</button>

