<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simple</title>
    <link rel="stylesheet" href="/Css/style.css">
</head>
<body>
    <h1>Sistema de Calculadora</h1>
    
    <h2>Calculadora basica</h2>
    <form action="resultado_basico.php" method="post">
        <input type="number" name="num1" step="any" required>
        <select name="operacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="any" required>
        <input type="submit" value="Calcular">
    </form>

    <h2>Áreas Geometricas</h2>
    <form action="resGeo.php" method="post">
        <select name="figura">
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="circulo">Circulo</option>
            <option value="triangulo">Triángulo</option>
        </select>
        <input type="number" name="valor1" step="any" placeholder="Valor 1" required>
        <input type="number" name="valor2" step="any" placeholder="Valor 2 (opcional)">
        <input type="submit" value="Calcular Área">
    </form>

    <h2>Cálculos Avanzados</h2>
    <form action="ecCuadratica.php" method="post">
        <select name="tipo">
            <option value="ecuacion">Ecuación cuadratica</option>
            <option value="raiz">Raíz cuadrada</option>
            <option value="potencia">Potencia</option>
        </select>
        <input type="number" name="valor1" placeholder="Valor 1" required>
        <input type="number" name="valor2" placeholder="Valor 2">
        <input type="number" name="valor3" placeholder="Valor 3">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
