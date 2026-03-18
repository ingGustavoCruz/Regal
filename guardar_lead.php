<?php
// guardar_lead.php
header('Content-Type: application/json');

// 1. Configuración de tu Base de Datos
$host = 'localhost';
$dbname = 'regal_db';
$username = 'root'; 
$password = ''; 

// Configuración del remitente del correo
$email_remitente = 'hola@tusitio.com'; // CAMBIA ESTO por tu correo real
$nombre_remitente = 'Regal';

try {
    // Conexión segura con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recibir y limpiar datos
    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');

    if (empty($nombre) || empty($correo)) {
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa todos los campos.']);
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'El formato del correo no es válido.']);
        exit;
    }

    // Insertar en la base de datos
    $stmt = $pdo->prepare("INSERT INTO vip_leads (nombre, correo) VALUES (:nombre, :correo)");
    $stmt->execute(['nombre' => $nombre, 'correo' => $correo]);

    // ==========================================
    // ENVÍO DE CORREO DE BIENVENIDA (HTML)
    // ==========================================
    $asunto = 'Tu acceso VIP ha sido confirmado | Regal';
    
    // Cabeceras para enviar correo en HTML
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $nombre_remitente <$email_remitente>\r\n";
    $headers .= "Reply-To: $email_remitente\r\n";

    // Diseño del correo electrónico (Inline CSS para compatibilidad)
    $mensaje_html = "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
      <style>
        body { margin: 0; padding: 0; background-color: #0D0C0A; color: #F9F4EB; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 40px 20px; text-align: center; border: 1px solid #C9A84C; border-opacity: 0.2; }
        .logo { font-family: 'Times New Roman', serif; font-size: 32px; color: #C9A84C; font-style: italic; letter-spacing: 4px; margin-bottom: 30px; }
        .title { font-size: 20px; font-weight: 300; letter-spacing: 2px; margin-bottom: 20px; text-transform: uppercase; color: #E8D48A; }
        .text { font-size: 14px; line-height: 1.8; color: #8A8070; margin-bottom: 30px; font-weight: 200; }
        .gold-text { color: #C9A84C; font-weight: bold; }
        .footer { font-size: 10px; letter-spacing: 1px; color: #555; margin-top: 40px; border-top: 1px solid rgba(201,168,76,0.2); padding-top: 20px; }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='logo'>Regal</div>
        <div class='title'>Bienvenido a la lista fundadora</div>
        <p class='text'>Estimado/a <span class='gold-text'>$nombre</span>,</p>
        <p class='text'>
          Es un placer confirmarte que tu lugar en nuestra lista VIP ha sido asegurado con éxito. Como miembro fundador, has obtenido automáticamente el estatus <span class='gold-text'>Gold</span>.
        </p>
        <p class='text'>
          Serás de los primeros en experimentar el arte de celebrar con nosotros, y pronto recibirás noticias exclusivas sobre nuestra apertura y los beneficios que te esperan.
        </p>
        <p class='text'>Nos vemos pronto.</p>
        <div class='footer'>© 2026 REGAL. TODOS LOS DERECHOS RESERVADOS.</div>
      </div>
    </body>
    </html>
    ";

    // Ejecutar envío
    @mail($correo, $asunto, $mensaje_html, $headers);
    // ==========================================

    echo json_encode(['status' => 'success', 'message' => '¡Bienvenido! Tu lugar ha sido asegurado y te enviamos un correo con los detalles.']);

} catch (PDOException $e) {
    if ($e->getCode() == 23000) { 
        echo json_encode(['status' => 'error', 'message' => 'Este correo ya se encuentra en nuestra lista VIP.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Ocurrió un error en el servidor. Intenta más tarde.']);
    }
}
?>