<?php

/**
 * Function area
 */
function str_contains(string $haystack, string $needle): bool
{
    for ($i = 0; $i < strlen($haystack); $i++) {
        if ($haystack[$i] == $needle) {
            return true;
        }
    }
    return false;
}

/**
 * Main thread
 */

$cadena = "a-a-r-e-f-a";
echo "Cadena inicial: " . $cadena . "<br>";
$iteraciones = strlen($cadena);
for ($i = 0; $i < $iteraciones; $i++) {
    if ($cadena[$i] == 'a') {
        $aux = substr($cadena, 0, $i);
        $aux2 = substr($cadena, $i + 1);
        $cadena = $aux . "tortuga" . $aux2;
        $i += strlen("tortuga") - 1;
        $iteraciones += strlen("tortuga") - 1;
    }
}
echo "Cadena final: ".$cadena . "<br><br>";
$array = explode("-", $cadena);
sort($array, SORT_STRING);
echo "Lista a partir de la cadena anterior: <ul>";
foreach ($array as $key => $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ul>";

$array2 = [];
foreach ($array as $key => $value) {
    if (function_exists('str_contains')) {
        if (!str_contains($value, 'a')) {
            $array2[sizeof($array2)] = $value;
        }
    }
}
echo "Tamaño de la lista 2: " . sizeof($array2);
echo "<ul>";
foreach ($array2 as $key => $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ul><br>";

$coches = [32, 11, 45, 22, 78, -3, 9, 66, 5];
echo "El elemento nº 5 del array de coches es ". $coches[4] . "<br>";

$importe = [32.583, 11.239, 45.781, 22.237];
echo "Array de importes: ";
print_r($importe);
?>
<br>
<a href="alumnosIndices.php" target="_blank" rel="noopener noreferrer">Ver matriz de alumnos por índices</a>
