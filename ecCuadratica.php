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
                $resultado = "Error: 'a' no puede ser 0.";
            } else {
                $discriminante = $b*$b - 4*$a*$c;
                if ($discriminante > 0) {
                    $x1 = (-$b + sqrt($discriminante)) / (2*$a);
                    $x2 = (-$b - sqrt($discriminante)) / (2*$a);
                    $resultado = "Raíces reales: x1 = $x1, x2 = $x2";
                } elseif ($discriminante == 0) {
                    $x = -$b / (2*$a);
                    $resultado = "Raíz doble: x = $x";
                } else {
                    $real = -$b / (2*$a);
                    $imag = sqrt(-$discriminante) / (2*$a);
                    $resultado = "Raíces complejas: x1 = $real + {$imag}i , x2 = $real - {$imag}i";
                }
            }
            break;

        case "raiz":
            if ($v1 >= 0) {
                $resultado = "√$v1 = " . sqrt($v1);
            } else {
                $resultado = "Error: no se puede calcular la raíz de un número negativo.";
            }
            break;

        case "potencia":
            if ($v2 === null) {
                $resultado = "Error: se requiere Valor 2 como exponente.";
            } else {
                $resultado = "$v1 ^ $v2 = " . pow($v1, $v2);
            }
            break;

        default:
            $resultado = "Operación no válida.";
            break;
    }

    echo "<h1>Resultado:</h1>";
    echo "<p>$resultado</p>";

    echo '<a href="index.php"><button>Volver</button></a>';
}
?>

