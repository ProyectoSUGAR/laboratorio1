<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $total = 0;
    $pi = 3.1416;   
        $fig = $_POST["figura"];


switch ($fig) {
        case "cuadrado":
            $total = $valor1 * $valor1;
            break;
        case "rectangulo":
                $valor2 = $_POST["valor2"];
            $total = $valor1 * $valor2;
            break;
        case "circulo":
                     $valor2 = $_POST["valor2"];

            $elevado = $valor1 * $valor2;
            $total = $pi * $elevado;
            break;
        case "triangulo":
                $valor2 = $_POST["valor2"];
            $ba = $valor1 * $valor2;
            $total = $ba / 2;
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }
    echo "<h1>Resultado: $total</h1>";
    


}
  echo '<a href="index.php"><button>Volver</button></a>'

?>
