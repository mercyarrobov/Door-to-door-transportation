<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes procesar el formulario, como enviar un correo electrónico o guardar en una base de datos.
    // Por ejemplo, aquí se envía un correo electrónico de muestra:

    $destinatario = "mercyarrobo.13@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Correo Electrónico: $correo\n";
    $mensaje_correo .= "Mensaje:\n\n$mensaje";

    // Envía el correo
    if (mail($destinatario, $asunto, $mensaje_correo)) {
        // Éxito: El correo se envió correctamente.
        header("Location: gracias.php");
        exit();
    } else {
        // Error: El correo no se pudo enviar.
        echo "Hubo un problema al enviar el correo.";
    }
    

    // Redirecciona a una página de agradecimiento.
    header("Location: gracias.php");
    exit();
}
?>
