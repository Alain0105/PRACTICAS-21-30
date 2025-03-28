
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Practica 28</title> <!-- Título que aparece en la pestaña del navegador -->
</head>
<body>
    <header><h1><mark>Mayor o menor de edad</mark></h1></header> <!-- Título principal de la página -->
    
    <main>
        <section> <!-- Sección principal que contiene el formulario y el código PHP -->
            <!-- Formulario para ingresar la edad -->
            <form action="" method="POST"> <!-- Se envían los datos por POST al mismo archivo -->
                <label for="edad">Ingresa tu edad</label> <!-- Etiqueta para el campo de edad -->
                <input type="number" name="edad" id="edad"> <!-- Campo de entrada para la edad del usuario -->
                <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
            </form>

            <?php
            // Verificación si se ha enviado el formulario
            if($_SERVER['REQUEST_METHOD']=='POST'){
                // Obtiene el valor de la edad ingresada por el usuario
                $edad = $_POST['edad'];

                // Compara si la edad es mayor o igual a 18
                if($edad >= 18){
                    echo "Eres mayor de edad"; // Mensaje cuando la edad es mayor o igual a 18
                }else{
                    echo "Eres menor de edad"; // Mensaje cuando la edad es menor a 18
                }
            }
            ?>  

            <!-- Enlaces para navegar entre las prácticas -->
            <br><br><a href="29.php">Siguiente Practica</a> <!-- Enlace a la siguiente práctica -->
            <br><br><a href="27.php">Practica anterior</a> <!-- Enlace a la práctica anterior -->
        </section>
    </main>

    <footer><p>Alain torres flores </p></footer> <!-- Pie de página con el nombre del autor -->
</body>
</html>
