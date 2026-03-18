<?php
/**
 * Funciones helper reutilizables del proyecto.
 */

/**
 * Carga la configuración de la aplicación.
 */
function getAppConfig(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/../config/app.php';
    }
    return $config;
}

/**
 * Carga la configuración de correo.
 */
function getMailConfig(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/../config/mail.php';
    }
    return $config;
}

/**
 * Obtiene la ruta base del proyecto para assets.
 * Útil para generar rutas absolutas desde cualquier subdirectorio.
 */
function basePath(): string
{
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $projectRoot = '/proyecto-merceria';
    
    // Si ya estamos en la raíz
    if ($scriptDir === $projectRoot || $scriptDir === $projectRoot . '/') {
        return '.';
    }
    
    // Calcular niveles de profundidad
    $relative = str_replace($projectRoot, '', $scriptDir);
    $depth = substr_count(trim($relative, '/'), '/') + 1;
    
    return str_repeat('../', $depth);
}
