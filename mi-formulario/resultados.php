<?php
// Asegúrate de que solo tú puedas acceder a este archivo (puedes agregar una validación adicional de usuario si lo deseas).

echo "<h1>Resultados Registrados</h1>";

// Abrir el archivo y mostrar su contenido
$archivo = fopen("resultados.txt", "r");

if ($archivo) {
    while (($linea = fgets($archivo)) !== false) {
        echo nl2br($linea); // Mostrar cada línea del archivo
    }
    fclose($archivo); // Cerrar el archivo
} else {
    echo "<p>No se pudo abrir el archivo de resultados.</p>";
}
?>
