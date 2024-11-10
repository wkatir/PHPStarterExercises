<?php

// Ejercicio 2: Número Primo
// Función para verificar si un número es primo
function esPrimo($num)
{
    // Un número menor que 2 no es primo (por definición)
    if ($num < 2) {
        return false;
    }

    // Usamos un bucle para verificar si el número es divisible por algún número entre 2 y la raíz cuadrada del número
    // Si es divisible por algún número en este rango, entonces no es primo
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Si el resto de la división entre $num e $i es 0, significa que $num es divisible por $i
        if ($num % $i == 0) {
            return false; // No es primo si es divisible por cualquier otro número
        }
    }

    // Si el bucle termina sin encontrar divisores, entonces el número es primo
    return true;
}

// Prueba de la función esPrimo
$numero = 29; // Cambiar este valor para verificar diferentes números
echo "¿El número $numero es primo? " . (esPrimo($numero) ? 'Sí' : 'No') . "\n";
