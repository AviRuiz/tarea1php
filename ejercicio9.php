<?php
// Crear el arreglo de valores enteros
$array = array(4, 6, 2, 8, 10);

// Calcular el promedio del arreglo
$sum = array_sum($array);
$count = count($array);
$average = $sum / $count;

// Ordenar el arreglo en orden descendente
rsort($array);

// Imprimir el promedio y el arreglo ordenado descendentemente
echo "Promedio: " . $average . "\n";
echo "Arreglo ordenado descendentemente: " . implode(", ", $array) . "\n";
?>
