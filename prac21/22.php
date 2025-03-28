<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 22</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header>
        <h1><mark>Es vocal o no es vocal</mark></h1> <!-- Título del ejercicio -->
    </header>
    
    <main>
    <section>
        <!-- Formulario para ingresar un carácter -->
        <form action="" method="POST"> <!-- Envío de datos por método POST al mismo archivo -->
            <label for="caracter">Ingrese un caracter:</label>
            <input type="text" id="caracter" name="caracter" maxlength="1" required> <!-- Campo de entrada para un solo carácter -->
            <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
        </form>

        <?php
        // Verificación si el formulario ha sido enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $char = strtolower($_POST['caracter']); // Convierte el carácter a minúscula para simplificar la comparación

            // Verificación si el carácter es una vocal
            if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
                $resultado = 'es vocal'; // Si coincide, es vocal
            } else {
                $resultado = 'no es vocal'; // Si no coincide, no es vocal
            }

            // Muestra el resultado en pantalla
            echo "<p>El carácter ingresado $char $resultado.</p>"; // Imprime el resultado
        }
        ?>

        <br><a href="23.php">Siguiente práctica</a> <!-- Enlace a la siguiente práctica -->
        <br><a href="21.php">Práctica anterior</a> <!-- Enlace a la práctica anterior -->
    </section>
    </main>
<!-- Pie de pagina y muestra la información del autor -->
    <footer><p>Alain Torres Flores</p> </footer>
</body>
</html>
