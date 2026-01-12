<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LcLEUQsAAAAAAlgHUxCnYdRzbxnFJXOrMuEh41v'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 


if($recaptcha->score >= 0.7){
//OK. ERES HUMANO, EJECUTA ESTE CÓDIGO

$mail = new PHPMailer(true);

try {
// CONFIGURACIÓN SMTP
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'masteringfrontend360@gmail.com';
$mail->Password   = 'ttew pxku jthi kwgr';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

// REMITENTE
$mail->setFrom('masteringfrontend360@gmail.com','Mastering Frontend');

// DESTINATARIO
$mail->addAddress('deliacampo@gmail.com');

// Datos del formulario. Antes habría que validar y sanitizar
$nombre = $_POST['fname'];
$apellidos = $_POST['lname'];
// $email = $_POST['email'];
$comentarios = $_POST['comentarios'];

$mensaje = "<p>Nombre: <strong>$nombre</strong></p>";
$mensaje .= "<p>Apellidos: <strong>$apellidos</strong></p>";
// $mensaje .= "<p>Email: <strong>$email</strong></p>";
$mensaje .= "<p>Comentarios: <strong>$comentarios</strong></p>";


// CONTENIDO
$mail->isHTML(true);
$mail->Subject ='Formulario de contacto desde página web anadelia.com';
$mail->Body    = $mensaje;


$mail->send();
$response = [
  "success" => true,
  "message" => "Formulario enviado correctamente"
];



}catch (Exception$e) {
    $response = [
  "success" => false,
  "message" => $mail->ErrorInfo
];
}
}else{
   // KO. ERES ROBOT, EJECUTA ESTE CÓDIGO
     $response = [
  "success" => false,
  "message" => "Eres un bot"
     ];
}
header('Content-Type: application/json;charset=UTF-8');
echo json_encode($response);
?>