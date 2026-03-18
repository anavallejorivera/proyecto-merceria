<?php
/**
 * Layout wrapper principal.
 * 
 * Uso desde cualquier página:
 *   $title = "Mi Título";
 *   $description = "Mi descripción";
 *   $showBreadcrumb = true; // opcional, solo en páginas de detalle
 *   require 'includes/header.php';
 *   require 'includes/nav.php';
 *   if (!empty($showBreadcrumb)) require 'includes/breadcrumb.php';
 *   // ... contenido de la página ...
 *   require 'includes/footer.php';
 *
 * Este archivo se puede usar como alternativa para simplificar:
 *   $title = "Mi Título";
 *   $description = "Mi descripción";
 *   $showBreadcrumb = false;
 *   ob_start();
 *   // ... HTML del contenido ...
 *   $content = ob_get_clean();
 *   require 'includes/layout.php';
 */

if (!isset($title)) $title = 'Mercería Larraz';
if (!isset($description)) $description = '';

require __DIR__ . '/header.php';
require __DIR__ . '/nav.php';

if (!empty($showBreadcrumb)) {
    require __DIR__ . '/breadcrumb.php';
}

echo $content ?? '';

require __DIR__ . '/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="<?php echo $base; ?>/assets/js/main.js"></script>
</body>
</html>
