<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
    <link rel="stylesheet" href="style.css">
    <script src="./main.js"></script>
</head>
<body onload="paginaCinco()">
    <header>
        <h1>UTEG</h1>
            <nav>
                <ul>
                    <a href="./index.html"><li >INICIO</li></a>
                    <a href="../ferchoramos.github.io/Pages/HTML.html"><li >HTML</li></a>
                    <a href="../ferchoramos.github.io/Pages/CSS.html"><li >CSS</li></a>
                    <a href="../ferchoramos.github.io/Pages/ARQ SERVICIOS.html"><li >ARQUITECTURA DE SERVICIOS</li></a>
                    <a href="./calculo.php"><li >PHP</li></a>
                </ul>
            </nav>
    </header>
    <h2>Calculadora de Áreas</h2>

    <h3>Área de un Círculo</h3>
    <form method="post">
        <label for="radio">Ingresa el radio del círculo:</label>
        <input type="number" step="0.01" id="radio" name="radio" required>
        <button type="submit" name="calcular_circulo">Calcular Área</button>
    </form>

    <?php
    if (isset($_POST['calcular_circulo'])) {
        $radio = $_POST['radio'];
        $area_circulo = pi() * pow($radio, 2);
        echo "<p>El área del círculo con radio $radio es: " . round($area_circulo, 2) . "</p>";
    }
    ?>

    <h3>Área de un Trapecio</h3>
    <form method="post">
        <label for="base_menor">Ingresa la base menor del trapecio:</label>
        <input type="number" step="0.01" id="base_menor" name="base_menor" required><br><br>
        
        <label for="base_mayor">Ingresa la base mayor del trapecio:</label>
        <input type="number" step="0.01" id="base_mayor" name="base_mayor" required><br><br>
        
        <label for="altura">Ingresa la altura del trapecio:</label>
        <input type="number" step="0.01" id="altura" name="altura" required>
        <button type="submit" name="calcular_trapecio">Calcular Área</button>
    </form>

    <?php
    if (isset($_POST['calcular_trapecio'])) {
        $base_menor = $_POST['base_menor'];
        $base_mayor = $_POST['base_mayor'];
        $altura = $_POST['altura'];
        $area_trapecio = (($base_menor + $base_mayor) / 2) * $altura;
        echo "<p>El área del trapecio con bases $base_menor y $base_mayor, y altura $altura es: " . round($area_trapecio, 2) . "</p>";
    }
    ?>
</body>
</html>
