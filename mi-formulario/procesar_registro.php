<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $curp = $_POST['curp'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];
    $nivel_estudio = $_POST['nivel_estudio'];

    $registro = "Nombre Completo: $nombre\n";
    $registro .= "Correo Electrónico: $correo\n";
    $registro .= "CURP: $curp\n";
    $registro .= "Teléfono: $telefono\n";
    $registro .= "Contraseña: $contraseña\n";
    $registro .= "Nivel de Estudio: $nivel_estudio\n";
    $registro .= "--------------------------\n";

    // Ruta segura a la carpeta de resultados
    $rutaArchivo = __DIR__ . "/resultados/resultados.txt";

    // Verifica si la carpeta existe, si no, la crea
    if (!file_exists(__DIR__ . "/resultados")) {
        mkdir(__DIR__ . "/resultados", 0777, true);
    }

    if (file_put_contents($rutaArchivo, $registro, FILE_APPEND)) {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Registro Exitoso</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #F0E1C6;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                    text-align: center;
                }
                .mensaje {
                    background-color: white;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                }
                img {
                    width: 120px;
                    margin-bottom: 20px;
                }
                h1 {
                    color: #006F30;
                }
                a {
                    display: inline-block;
                    margin-top: 20px;
                    text-decoration: none;
                    background-color: #006F30;
                    color: white;
                    padding: 10px 20px;
                    border-radius: 5px;
                }
                a:hover {
                    background-color: #004d22;
                }
            </style>
        </head>
        <body>
            <div class="mensaje">
                <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Check">
                <h1>¡Registro exitoso!</h1>
                <p>Tus datos han sido guardados correctamente.</p>
                <a href="index.php">Volver al inicio</a>
            </div>
        </body>
        </html>
        ';
    } else {
        echo "<h1>Error</h1><p>No se pudieron guardar los datos.</p>";
    }
} else {
    echo "<h1>Acceso inválido</h1>";
}
?>
