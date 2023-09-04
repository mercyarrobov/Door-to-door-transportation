<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $tipo_carga = $_POST["tipo_carga"];
    $comentarios = $_POST["comentarios"];

    // Configura la dirección de correo a la que se enviará el mensaje.
    $destinatario = "mercyarrobo.13@gmail.com"; // Cambia esto por tu dirección de correo electrónico.

    // Construye el mensaje de correo.
    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Correo Electrónico: $correo\n";
    $mensaje_correo .= "Teléfono: $telefono\n";
    $mensaje_correo .= "Origen: $origen\n";
    $mensaje_correo .= "Destino: $destino\n";
    $mensaje_correo .= "Tipo de Carga: $tipo_carga\n";
    $mensaje_correo .= "Comentarios:\n$comentarios";

    // Envía el correo electrónico.
    mail($destinatario, "Solicitud de Cotización", $mensaje_correo);

    // Redirecciona a una página de agradecimiento o éxito.
    header("Location: gracias.php");
    exit();
}
?>
