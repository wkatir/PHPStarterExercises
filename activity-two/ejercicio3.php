<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frecuencia de Caracteres</title>
</head>
<body>
    <h1>Frecuencia de Caracteres</h1>
    <!-- Formulario HTML para ingresar una cadena de texto -->
    <form method="POST">
        <label for="text">Introduce un texto:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit">Obtener Frecuencia</button>
    </form>
    
    <?php
    // Esta parte de PHP se ejecuta cuando el formulario es enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener el texto ingresado por el usuario
        $text = $_POST['text'];
        
        // Inicializar un array vacío para contar la frecuencia de cada carácter
        $freq = [];
        
        // Eliminar los espacios en blanco si no se quieren contar
        $text = str_replace(' ', '', $text);
        
        // Recorrer cada carácter del texto
        foreach (str_split($text) as $char) {
            // Si el carácter ya existe en el array, incrementar su frecuencia
            if (isset($freq[$char])) {
                $freq[$char]++;
            } else {
                // Si el carácter no existe, agregarlo al array con frecuencia 1
                $freq[$char] = 1;
            }
        }
        
        // Mostrar la frecuencia de los caracteres
        echo '<h2>Frecuencia de Caracteres:</h2>';
        echo '<pre>'; // La etiqueta <pre> es usada para preservar el formato de la salida
        print_r($freq);
        echo '</pre>';
    }
    ?>
</body>
</html>
