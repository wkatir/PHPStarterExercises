<?php

// Ejercicio 3: Palíndromo
// Función para verificar si una cadena es un palíndromo
function esPalindromo($cadena)
{
    // Convertimos la cadena a minúsculas para que la comparación no sea sensible a mayúsculas
    // También eliminamos caracteres especiales y espacios para comparar solo letras y números
    // `preg_replace` reemplaza los caracteres que no son letras ni números por una cadena vacía ''
    // Esto permite que frases como "Anita lava la tina" se lean igual sin espacios ni signos
    $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $cadena));

    // Comparamos la cadena resultante con su reverso (`strrev` invierte la cadena)
    // Si son iguales, entonces la cadena es un palíndromo
    return $cadena === strrev($cadena);
}

// Prueba de la función esPalindromo
$texto = "Anita lava la tina"; // Cambiar este texto para verificar otros casos
echo "¿La cadena \"$texto\" es un palíndromo? " . (esPalindromo($texto) ? 'Sí' : 'No') . "\n";
