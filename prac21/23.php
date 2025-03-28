<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de la página -->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 23</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header>
        <h1><mark>Multiplo de 3 Y 5</mark></h1> <!-- Título del ejercicio -->
    </header>
    
    <main>
        <section>
            <!-- Formulario para ingresar un número -->
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label> <!-- Ingreso de un número por parte del usuario -->
                <input type="number" id="num" name="num"> <!-- Campo de entrada para el número -->
                <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
            </form>
            
            <?php 
            // Verificación si el formulario ha sido enviado
            if($_SERVER['REQUEST_METHOD']=='POST'){ // Si se recibe un POST
                $numero = $_POST['num']; // Se obtiene el número ingresado por el usuario

                // Verificación si el número es múltiplo de 3 y 5
                if($numero % 3 == 0 && $numero % 5 ==0){ // Si el número es divisible por 3 y 5
                    $mensaje = "El numero: " . $numero . " es múltiplo de 3 y 5"; // Mensaje si es múltiplo
                }else { // Si no es múltiplo de 3 y 5
                    $mensaje="El numero: " . $numero . " no es múltiplo de 3 y 5"; // Mensaje si no es múltiplo
                }
            
            echo $mensaje; // Imprime el mensaje con el resultado
            }
            ?>

            <br><br><a href="24.php">Siguiente práctica</a> <!-- Enlace a la siguiente práctica -->
            <br><br><a href="22.php">Práctica anterior</a> <!-- Enlace a la práctica anterior -->

        </section>
    </main>
    
    <!-- Pie de página con información del autor -->
    <footer><p>Alain Torres Flores</p> </footer>
</body>
</html>
