<?php
/**
 * Configuración de correo SMTP.
 * Lee credenciales desde config/.env para no exponerlas en código.
 */

// Cargar variables de entorno
$envFile = __DIR__ . '/.env';
$env = [];
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        if (strpos($line, '=') === false) continue;
        [$key, $value] = explode('=', $line, 2);
        $env[trim($key)] = trim($value);
    }
}

return [
    'host'     => $env['SMTP_HOST']   ?? 'smtp.gmail.com',
    'port'     => (int)($env['SMTP_PORT'] ?? 587),
    'username' => $env['SMTP_USER']   ?? '',
    'password' => $env['SMTP_PASS']   ?? '',
    'from_name'    => 'Formulario Mercería Larraz',
    'to_address'   => $env['MAIL_TO']  ?? '',
    'recaptcha_secret' => $env['RECAPTCHA_SECRET'] ?? '',
];
