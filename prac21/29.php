<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Practica 29</title>
</head>

<body>
    <!-- Sección del encabezado de la página, que contiene el título -->
    <header><h1><mark>Doble y Triple </mark></h1></header>

    <!-- Sección principal que contiene el formulario y los resultados -->
    <main>
        <section>
            <!-- Formulario que envía datos usando el método POST -->
            <form action="" method="POST">
                <!-- Etiqueta que describe el campo de entrada -->
                <label for="num">Ingresa un numero</label>
                <!-- Campo de entrada para ingresar un número -->
                <input type="number" name="num" id="num">
                <!-- Botón para enviar el formulario -->
                <button type="submit">Enviar</button>
            </form>

            <!-- Código PHP para procesar el formulario después de que se envíe -->
            <?php
            // Verifica si el formulario fue enviado usando el método POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtiene el valor del número ingresado en el formulario
                $numero = $_POST['num'];

                // Si el número es mayor que 0, se multiplica por 2
                if ($numero > 0) {
                    $resultado = $numero * 2;
                }
                // Si el número es menor que 0, se multiplica por 3
                else if ($numero < 0) {
                    $resultado = $numero * 3;
                }
                // Si el número es igual a 0, el resultado es 0
                else {
                    $resultado = 0;
                }

                // Muestra el resultado en la página
                echo "El resultado es: $resultado";
            }
            ?>
            
            <!-- Enlaces a otras páginas -->
            <br><br><a href="30.php">Siguiente Practica</a>
            <br><br><a href="28.php">Practica anterior</a>
        </section>
    </main>

    <!-- Pie de página con el nombre del autor -->
    <footer><p>Alain Torres Flores</p></footer>
</body>
</html>
