<?php
// ============================================
// BREADCRUMB DINÁMICO (Sección > Detalle)
// Ejemplo:
// merceria-lanas-y-bragas.php
// => Merceria > Lanas y bragas
// ============================================

$filename = basename($_SERVER['PHP_SELF'], '.php');
$parts = explode('-', $filename);

// Sección = primera parte (manualidades, merceria, textil...)
$seccion_slug  = $parts[0] ?? '';
$seccion_label = $seccion_slug ? ucfirst($seccion_slug) : '';
$seccion_url   = $seccion_slug ? $seccion_slug . ".php" : "#";

// Detalle = el resto
$detalle_slug = '';
if (count($parts) > 1) {
  $detalle_slug = implode(' ', array_slice($parts, 1));
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
