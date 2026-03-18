<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar PHPMailer desde lib/
require __DIR__ . '/lib/PHPMailer/PHPMailer.php';
require __DIR__ . '/lib/PHPMailer/Exception.php';
require __DIR__ . '/lib/PHPMailer/SMTP.php';

// Cargar configuración de correo (lee credenciales desde config/.env)
$mailConfig = require __DIR__ . '/config/mail.php';

// 3.1 Verificar reCAPTCHA
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = $mailConfig['recaptcha_secret'];
$recaptcha_response = $_POST['recaptcha_response'] ?? '';

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . urlencode($recaptcha_secret) . '&response=' . urlencode($recaptcha_response));
$recaptcha = json_decode($recaptcha);

if (!$recaptcha->success || $recaptcha->score < 0.7) {
    die('❌ reCAPTCHA fallido. Eres un bot o la puntuación es baja.');
}

// 3.2 Validar y limpiar datos del formulario
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

if (strlen($name) < 2 || !$email || strlen($message) < 10) {
    die('❌ Datos inválidos. Revisa el formulario.');
}

// 3.3 Configurar PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP desde configuración
    $mail->isSMTP();
    $mail->Host       = $mailConfig['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $mailConfig['username'];
    $mail->Password   = $mailConfig['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $mailConfig['port'];

    // Remitente y destinatario
    $mail->setFrom($mailConfig['username'], $mailConfig['from_name']);
    $mail->addAddress($mailConfig['to_address']);

    // 3.4 Crear y enviar mensaje
    $mensaje = "<h2>Nuevo mensaje desde el formulario</h2>";
    $mensaje .= "<p><strong>Nombre:</strong> $name</p>";
    $mensaje .= "<p><strong>Email:</strong> $email</p>";
    $mensaje .= "<p><strong>Mensaje:</strong><br>$message</p>";

    $mail->isHTML(true);
    $mail->Subject = '📩 Nuevo mensaje de contacto - Mercería Larraz';
    $mail->Body    = $mensaje;

    $mail->send();

    // ✅ Redirección a página de agradecimiento
    header('Location: gracias.php');
    exit;

} catch (Exception $e) {
    echo "❌ Error al enviar: {$mail->ErrorInfo}";
}
?>
