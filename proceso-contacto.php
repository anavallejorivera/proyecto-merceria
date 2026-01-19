<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar PHPMailer
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/SMTP.php';

// 3.1 Verificar reCAPTCHA
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LcLEUQsAAAAAAlgHUxCnYdRzbxnFJXOrMuEh41v';
$recaptcha_response = $_POST['recaptcha_response'] ?? '';

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
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
    // SMTP Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'masteringfrontend360@gmail.com'; // Tu cuenta Gmail
    $mail->Password   = 'ttew pxku jthi kwgr';            // Contraseña de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Remitente y destinatario
    $mail->setFrom('masteringfrontend360@gmail.com', 'Formulario Mercería Larraz');
    $mail->addAddress('bigdatazgz@gmail.com');

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
