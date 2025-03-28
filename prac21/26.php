<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 26</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header><h1><mark>Numero mayor, intermedio y menor</mark></h1></header>

    <main>
        <section>
            <!-- Formulario para ingresar tres números -->
            <form action="" method="POST"> <!-- Envío de datos por método POST al mismo archivo -->
                <label for="num1">Ingresa un numero:</label> <!-- Campo de entrada para el primer número -->
                <input type="number" name="num1" id="num1"><br><br>
                
                <label for="num2">Ingresa un numero:</label> <!-- Campo de entrada para el segundo número -->
                <input type="number" name="num2" id="num2"><br><br>
                
                <label for="num3">Ingresa un numero:</label> <!-- Campo de entrada para el tercer número -->
                <input type="number" name="num3" id="num3"><br><br>
                
                <!-- Botón para enviar el formulario -->
                <button type="submit">Enviar</button><br><br> 
            </form>

            <?php
            // Verificación si el formulario ha sido enviado
            if ($_SERVER["REQUEST_METHOD"] == 'POST') { // Si se recibe un POST
                // Se obtienen los tres números ingresados por el usuario
                $N1 = $_POST['num1'];
                $N2 = $_POST['num2'];
                $N3 = $_POST['num3'];

                // Determinación del número menor
                if ($N1 < $N2 && $N1 < $N3) {
                    $menor = $N1; // El primer número es el menor
                } elseif ($N2 < $N1 && $N2 < $N3) {
                    $menor = $N2; // El segundo número es el menor
                } else {
                    $menor = $N3; // El tercer número es el menor
                }

                // Determinación del número mayor
                if ($N1 > $N2 && $N1 > $N3) {
                    $mayor = $N1; // El primer número es el mayor
                } elseif ($N2 > $N1 && $N2 > $N3) {
                    $mayor = $N2; // El segundo número es el mayor
                } else {
                    $mayor = $N3; // El tercer número es el mayor
                }

                // Cálculo del número intermedio
                $intermedio = ($N1 + $N2 + $N3) - ($mayor + $menor); // El número intermedio es el que queda después de excluir el mayor y el menor

                // Mostrar los resultados
                echo "El numero mayor: " . $mayor . "<br><br>" . "El numero intermedio: " . $intermedio . "<br><br>" . "El numero menor: " . $menor . "<br><br>";
            }
            ?>

            <!-- Enlaces para navegar entre las prácticas -->
            <br><br><a href="27.php">Siguiente práctica</a> <!-- Enlace a la siguiente práctica -->
            <br><br><a href="25.php">Práctica anterior</a> <!-- Enlace a la práctica anterior -->
        </section>
    </main>

    <!-- Pie de página con información del autor-->
    <footer><p>Alain Torres Flores</p></footer>
</body>
</html>
