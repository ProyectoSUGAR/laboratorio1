<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Sistema de Calculadora</h1>
        </div>

        <div class="calculator-grid">
            <div class="calculator-section">
                <h2>Calculadora Básica</h2>
                <form action="resBasico.php" method="post" class="calculator-form">
                    <div class="form-row">
                        <input type="number" name="num1" step="any" placeholder="Número 1" required>
                        <select name="operacion" class="operation-select">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">×</option>
                            <option value="/">÷</option>
                        </select>
                        <input type="number" name="num2" step="any" placeholder="Número 2" required>
                    </div>
                    <button type="submit" class="btn">Calcular</button>
                </form>
            </div>

            <div class="calculator-section">
                <h2>Áreas Geométricas</h2>
                <form action="resGeo.php" method="post" class="calculator-form">
                    <div class="form-group">
                        <select name="figura" class="figure-select">
                            <option value="cuadrado">Cuadrado</option>
                            <option value="rectangulo">Rectángulo</option>
                            <option value="circulo">Círculo</option>
                            <option value="triangulo">Triángulo</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="number" name="valor1" step="any" placeholder="Valor 1" required>
                        <input type="number" name="valor2" step="any" placeholder="Valor 2 (opcional)">
                    </div>
                    <button type="submit" class="btn">Calcular Área</button>
                </form>
            </div>

            <div class="calculator-section">
                <h2>Cálculos Avanzados</h2>
                <form action="ecCuadratica.php" method="post" class="calculator-form">
                    <div class="form-group">
                        <select name="tipo" class="advanced-select">
                            <option value="ecuacion">Ecuación cuadrática</option>
                            <option value="raiz">Raíz cuadrada</option>
                            <option value="potencia">Potencia</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="number" name="valor1" placeholder="Valor 1" required>
                        <input type="number" name="valor2" placeholder="Valor 2">
                        <input type="number" name="valor3" placeholder="Valor 3">
                    </div>
                    <button type="submit" class="btn">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

