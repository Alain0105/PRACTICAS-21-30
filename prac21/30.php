
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Practica 30</title>
</head>
<body>
    <!-- Sección del encabezado de la página, que contiene el título -->
    <header><h1><mark>3 Mejores notas</mark></h1></header>

    <!-- Sección principal que contiene el formulario y los resultados -->
    <main>
        <!-- Formulario que envía los datos usando el método POST -->
        <form action="30.php" method="POST">
            <!-- Campo de entrada para la primera nota -->
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" required><br><br>
            
            <!-- Campo de entrada para la segunda nota -->
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" required><br><br>
            
            <!-- Campo de entrada para la tercera nota -->
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" required><br><br>
            
            <!-- Campo de entrada para la cuarta nota -->
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" id="nota4" required><br><br>

            <!-- Botón para enviar el formulario -->
            <br><button type="submit">Calcular</button>
        </form>

        <!-- Código PHP para procesar las notas después de que se envíe el formulario -->
        <?php
        // Verifica si el formulario fue enviado usando el método POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtiene las cuatro notas enviadas desde el formulario
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            // Ordena las notas de mayor a menor
            $notas = array($nota1, $nota2, $nota3, $nota4);
            rsort($notas); // Ordena el arreglo de mayor a menor

            // Calcula el promedio de las tres mejores notas
            $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

            // Muestra el promedio con 2 decimales
            echo "<p>El promedio de las 3 mejores notas es: " . number_format($promedio, 2) . "</p>"; 

            // Determina si el estudiante aprobó o reprobó basándose en el promedio
            if ($promedio >= 6) {
                echo "<p>Aprobó</p>";
            } else {
                echo "<p>Reprobó</p>";
            }
        }
        ?>
        
        <!-- Enlace a la página anterior -->
        <br><br><a href="29.php">Practica anterior</a>
    </main>

    <!-- Pie de página con el nombre del autor -->
    <footer><p>Alain Torres Flores</p></footer>
</body>
</html>
