<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 24</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header><h1><mark>Es par o impar</mark></h1></header>
    
    <main>
        <section>
            <!-- Formulario para ingresar un número -->
            <form action="" method="POST"> <!-- Envío de datos por método POST al mismo archivo -->
                <label for="num">Ingresa un numero:</label> <!-- Campo de entrada para un número -->
                <input type="number" id="num" name="num"> <!-- Campo de entrada para el número -->
                <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
            </form>
            
            <?php 
            // Verificación si el formulario ha sido enviado
            if($_SERVER['REQUEST_METHOD']=='POST'){ // Si se recibe un POST
                $numero = $_POST['num']; // Se obtiene el número ingresado por el usuario

                // Verificación si el número es par o impar
                if($numero % 2 == 0){ // Si el número es divisible por 2 (par)
                    $mensaje = "El numero: " . $numero . " es par"; // Mensaje si es par
                }else{ // Si el número no es divisible por 2 (impar)
                    $mensaje = "El numero: " . $numero . " es impar"; // Mensaje si es impar
                }
                echo $mensaje; // Imprime el mensaje con el resultado
            }
            ?>

            <br><br><a href="25.php">Siguiente práctica</a> <!-- Enlace a la siguiente práctica -->
            <br><br><a href="23.php">Práctica anterior</a> <!-- Enlace a la práctica anterior -->

        </section>
    </main>
    
    <!-- Pie de página con información del autor -->
    <footer><p>Alain Torres Flores</p></footer>
</body>
</html>
