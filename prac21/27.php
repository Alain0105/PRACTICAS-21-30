<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Practica 27</title> 
</head>
<body>
    <!-- Título principal de la página -->
    <header><h1><mark>Ecuacion de primer grado</mark></h1></header> 

    <main>
        <section> <!-- Sección que contiene el formulario y el código PHP -->
        
            <!-- Formulario donde se solicita el valor de 'a' y 'b' -->
            <form action="" method="POST"> 
                <!-- Etiqueta para el campo 'a' -->
                <label for="a">Ingresa el valor de A</label> 
                <!-- Campo de entrada para el valor 'a' -->
                <input type="number" name="a" id="a"><br><br> 

                <!-- Etiqueta para el campo 'b' -->
                <label for="b">Ingresa el valor de B</label> 
                <!-- Campo de entrada para el valor 'b' -->
                <input type="number" name="b" id="b"><br><br> 
                
                <!-- Botón para enviar el formulario -->
                <button type="submit">Enviar</button><br> 
            </form>

            <?php
            // Verifica si se ha enviado el formulario mediante el método POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtiene los valores de 'a' y 'b' que el usuario ingresó en el formulario
                $a = $_POST['a'];
                $b = $_POST['b'];

                // Si 'a' es igual a 0, se muestra un mensaje indicando que no se puede resolver la ecuación
                if ($a == 0) {
                    $mensaje = "El valor de a no puede ser 0"; // Mensaje cuando 'a' es 0
                } else {
                    // Si 'a' no es 0, resuelve la ecuación de primer grado ax + b = 0
                    $x = -$b / $a; // Calcula el valor de x
                    $mensaje = "El valor de x es: $x"; // Mensaje que muestra el resultado de x
                }
                // Muestra el mensaje al usuario
                echo $mensaje; 
            }
            ?>
            
            <!-- Enlaces para navegar entre las prácticas -->
            <br><br><a href="28.php">Siguiente Practica</a> <!-- Enlace a la siguiente práctica -->
            <br><br><a href="26.php">Practica anterior</a> <!-- Enlace a la práctica anterior -->
        </section>
    </main>

    <!-- Pie de página con el nombre del autor -->
    <footer><p>Alain torres flores</p></footer>
</body>
</html>
