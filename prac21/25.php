<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 25</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header>
        <h1><mark>Numero doble y triple</mark></h1> <!-- Título del ejercicio -->
    </header>
    
    <main></main>
    
    <section>
        <!-- Formulario para ingresar un número -->
        <form action="" method="POST"> <!-- Envío de datos por método POST al mismo archivo -->
            <label for="num">Ingresa un numero:</label> <!-- Campo de entrada para un número -->
            <input type="number" name="num" id="num"> <!-- Campo de entrada para el número -->
            <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
        </form>
        
        <?php 
        // Verificación si el formulario ha sido enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si se recibe un POST
            $numero = $_POST['num']; // Se obtiene el número ingresado por el usuario

            // Verificación si el número es impar o par
            if ($numero % 2 != 0) { // Si el número es impar
                // Si es impar, calcula el doble y muestra el resultado
                $mensaje = "El doble del numero: " . $numero . " es " . ($numero * 2);
            } else { // Si el número es par
                // Si es par, calcula el triple y muestra el resultado
                $mensaje = "El triple del numero: " . $numero . " es " . ($numero * 3);
            }
            // Imprime el mensaje con el resultado
            echo $mensaje;
        }
        ?>
        
        <!-- Enlaces para navegar entre las prácticas -->
        <br><br><a href="26.php">Siguiente practica</a> <!-- Enlace a la siguiente práctica -->
        <br><br><a href="24.php">Practica anterior</a> <!-- Enlace a la práctica anterior -->
    </section>
    
    <!-- Pie de página con información del autor-->
    <footer><p>Alain Torres Flores</p></footer>
</body>
</html>
