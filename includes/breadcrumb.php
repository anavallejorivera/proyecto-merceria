<?php
// ============================================
// BREADCRUMB DINÁMICO (Sección > Detalle)
// Soporta ambos formatos:
//   - Original: merceria-hilos-y-lanas.php → Mercería > Hilos y lanas
//   - Nuevo (pages/): pages/merceria/hilos-y-lanas.php → Mercería > Hilos y lanas
// ============================================

$filename = basename($_SERVER['PHP_SELF'], '.php');
$dirName  = basename(dirname($_SERVER['PHP_SELF']));

// Detectar si estamos en pages/ (nuevo formato) o en el formato original
if (in_array($dirName, ['merceria', 'manualidades', 'textil'])) {
  // Nuevo formato: la sección viene del directorio
  $seccion_slug  = $dirName;
  $detalle_slug  = ($filename !== 'index') ? str_replace('-', ' ', $filename) : '';
  $seccion_label = ucfirst($seccion_slug);
  $seccion_url   = (isset($base) ? $base : '.') . "/pages/" . $seccion_slug . "/index.php";
} else {
  // Formato original: seccion-detalle.php
  $parts = explode('-', $filename);
  $seccion_slug  = $parts[0] ?? '';
  $seccion_label = $seccion_slug ? ucfirst($seccion_slug) : '';
  $seccion_url   = $seccion_slug ? $seccion_slug . ".php" : "#";
  $detalle_slug  = (count($parts) > 1) ? implode(' ', array_slice($parts, 1)) : '';
}

// Formato: Solo primera palabra con mayúscula inicial
function toTitleCase($text) {
  $text = str_replace(['_', '-'], ' ', $text);
  $text = strtolower($text);
  $words = preg_split('/\s+/', trim($text));

  foreach ($words as $i => $w) {
    if ($w === '') continue;

    if ($i === 0) {
      $words[$i] = ucfirst($w);
    } else {
      // Mantener "y" en minúscula (y el resto ya está en minúscula)
      $words[$i] = ($w === 'y') ? 'y' : $w;
    }
  }

  return trim(implode(' ', $words));
}

$detalle_label = $detalle_slug ? toTitleCase($detalle_slug) : '';
?>

<div class="container-lg producto-compactamd mt-4">
  <div class="w-75 mx-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">

        <!-- Sección -->
        <?php if ($seccion_label): ?>
          <li class="breadcrumb-item">
            <a href="<?php echo $seccion_url; ?>">
              <?php echo $seccion_label; ?>
            </a>
          </li>
        <?php endif; ?>

        <!-- Detalle -->
        <?php if ($detalle_label): ?>
          <li class="breadcrumb-item active" aria-current="page">
            <?php echo $detalle_label; ?>
          </li>
        <?php endif; ?>

      </ol>
    </nav>
  </div>
</div>

<style>
  /* Separador breadcrumb: ">" */
  .breadcrumb-item + .breadcrumb-item::before {
    content: ">";
  }
</style>
