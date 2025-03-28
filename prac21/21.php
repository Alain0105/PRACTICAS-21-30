<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 21</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    <!-- Encabezado principal -->
    <header>
        <h1><mark> Número mayor de 3 números</mark></h1> <!-- Título resaltado del ejercicio -->
    </header>
    
    <main>
    <section>
        <!-- Formulario para ingresar tres números -->
        <form action="" method="POST"> <!-- Envío de datos por método POST al mismo archivo -->
            <label for="num1"> Ingresa el número 1:</label>
            <input type="number" id="num1" name="num1" required><br><br> <!-- Campo de entrada para el primer número -->

            <label for="num2"> Ingresa el número 2:</label>
            <input type="number" id="num2" name="num2" required><br><br> <!-- Campo de entrada para el segundo número -->

            <label for="num3"> Ingresa el número 3:</label>
            <input type="number" id="num3" name="num3" required><br><br> <!-- Campo de entrada para el tercer número -->

            <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
        </form>

        <?php
        // Verificación si el formulario ha sido enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Captura de datos enviados desde el formulario
            $n1 = $_POST['num1']; // Primer número ingresado por el usuario
            $n2 = $_POST['num2']; // Segundo número ingresado por el usuario
            $n3 = $_POST['num3']; // Tercer número ingresado por el usuario

            // Comparación para determinar el número mayor
            if($n1 >= $n2 && $n1 >= $n3){ // Si el primer número es mayor o igual que los demás
                $mayor = $n1; // El primer número es el mayor
            } elseif($n2 >= $n1 && $n2 >= $n3){ // Si el segundo número es mayor o igual que los demás
                $mayor = $n2; // El segundo número es el mayor
            } else { // Si ninguna de las anteriores se cumple, el tercer número es el mayor
                $mayor = $n3;
            }

            // Muestra o imprime el resultado en pantalla
            echo "<p>El número $mayor es el mayor de los 3 números.</p>"; // Imprime el número mayor
        }
        ?>

        <br><a href="22.php">Siguiente práctica</a> <!-- Enlace a la siguiente práctica -->
    </section>
    </main>
<!-- Pie de pagina con información del autor -->
    <footer><p>Alain Torres Flores</p> </footer>
</body>
</html>

