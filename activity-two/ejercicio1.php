<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Invertida</title>
</head>
<body>
    <h1>Lista Invertida</h1>
    <!-- Formulario HTML para ingresar una lista de números -->
    <form method="POST">
        <label for="numbers">Introduce los números (separados por coma):</label>
        <input type="text" id="numbers" name="numbers" required>
        <button type="submit">Invertir</button>
    </form>
    
    <?php
    // Esta parte de PHP se ejecuta cuando el formulario es enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener los números ingresados por el usuario, separarlos por coma
        $numbers = explode(',', $_POST['numbers']);
        
        // Eliminar los espacios sobrantes alrededor de cada número
        $numbers = array_map('trim', $numbers);
        
        // Invertir el array de números usando array_reverse
        $reversed = array_reverse($numbers);
        
        // Mostrar la lista invertida en un formato legible
        echo '<h2>Lista Invertida:</h2>';
        echo '<pre>'; // La etiqueta <pre> es usada para preservar el formato de la salida
        print_r($reversed);
        echo '</pre>';
    }
    ?>
</body>
</html>
