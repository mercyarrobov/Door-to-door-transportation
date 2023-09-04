<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Tu Empresa de Transporte Puerta a Puerta</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Contacta con Nosotros</h1>
        <p>Complete el formulario a continuación para solicitar una cotización o hacer una pregunta.</p>
    </header>

    <section>
    <h2>Solicita una Cotización</h2>
    <form action="procesar_cotizacion.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen" required>

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required>

        <label for="tipo_carga">Tipo de Carga:</label>
        <input type="text" id="tipo_carga" name="tipo_carga" required>

        <label for="comentarios">Comentarios adicionales:</label>
        <textarea id="comentarios" name="comentarios"></textarea>

        <input type="submit" value="Solicitar Cotización">
    </form>
</section>


    <footer>
        <p>Volver a la <a href="index.php">Página de Inicio</a></p>
    </footer>
</body>
</html>
