<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrón de Pirámide</title>
</head>
<body>
    <h1>Patrón de Pirámide</h1>
    <!-- Formulario HTML para ingresar la altura de la pirámide -->
    <form method="POST">
        <label for="height">Introduce la altura de la pirámide:</label>
        <input type="number" id="height" name="height" min="1" required>
        <button type="submit">Generar Pirámide</button>
    </form>
    
    <?php
    // Esta parte de PHP se ejecuta cuando el formulario es enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener la altura de la pirámide ingresada por el usuario
        $height = $_POST['height'];
        
        // Función para imprimir la pirámide
        function printPyramid($height) {
            // Bucle externo para las filas de la pirámide
            for ($i = 1; $i <= $height; $i++) {
                // Imprimir los espacios en blanco antes de los asteriscos
                for ($j = $i; $j < $height; $j++) {
                    echo " ";
                }
                // Imprimir los asteriscos en la fila
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                // Salto de línea después de cada fila
                echo "<br>";
            }
        }
        
        // Llamar a la función para imprimir la pirámide
        printPyramid($height);
    }
    ?>
</body>
</html>
