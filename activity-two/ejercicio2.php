<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Números Pares</title>
</head>
<body>
    <h1>Suma de Números Pares</h1>
    <!-- Formulario HTML para ingresar una lista de números -->
    <form method="POST">
        <label for="numbers">Introduce los números (separados por coma):</label>
        <input type="text" id="numbers" name="numbers" required>
        <button type="submit">Sumar Números Pares</button>
    </form>
    
    <?php
    // Esta parte de PHP se ejecuta cuando el formulario es enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener los números ingresados por el usuario, separarlos por coma
        $numbers = explode(',', $_POST['numbers']);
        
        // Eliminar los espacios sobrantes alrededor de cada número
        $numbers = array_map('trim', $numbers);
        
        // Inicializar una variable para almacenar la suma de los números pares
        $sum = 0;
        
        // Recorrer el array de números y sumar los que sean pares
        foreach ($numbers as $num) {
            // Comprobar si el número es par
            if ($num % 2 == 0) {
                // Sumar el número par a la variable $sum
                $sum += $num;
            }
        }
        
        // Mostrar la suma de los números pares
        echo '<h2>Suma de Números Pares: ' . $sum . '</h2>';
    }
    ?>
</body>
</html>
