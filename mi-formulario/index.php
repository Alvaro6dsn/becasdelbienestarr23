<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Beca Benito Juárez</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <!-- Contenedor para la imagen -->
        <div class="header-container">
            <!-- Imagen añadida como encabezado de la página -->
            <img src="https://www.gob.mx/cms/uploads/image/file/524754/Eduaci_n_Beca_Educaci_n_B_sica.jpg" id="logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="informacion.php">Información</a></li>
                <li><a href="contactos.php">Contactos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="registro" class="form-container">
            <h2>Formulario de Registro</h2>
            <form method="POST" action="procesar_registro.php">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" required>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>

                <label for="nivel_estudio">Nivel de Estudio:</label>
                <select id="nivel_estudio" name="nivel_estudio" required>
                    <option value="preparatoria">Preparatoria</option>
                    <option value="universidad">Universidad</option>
                    <option value="posgrado">Posgrado</option>
                </select>

                <button type="submit">Registrarse</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 Gobierno de México - Coordinación Nacional de Becas para el Bienestar Benito Juárez</p>
    </footer>
</body>

</html>
