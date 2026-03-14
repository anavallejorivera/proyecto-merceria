<?php 
$title = "Larraz | Catálogo > Mercería > Accesorios de Costura";
$description = 'Herramientas esenciales para precisión y comodidad en proyectos de costura';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Accesorios de Costura</h2>
    <p class="subtitulo-producto mb-1 lead">
      Los accesorios de costura son las herramientas que hacen que cualquier proyecto sea más cómodo, rápido y preciso.<br>
      Desde tijeras y cintas métricas hasta alfileres, dedales o marcadores, son imprescindibles para cortar, medir, sujetar y rematar con un acabado limpio.<br><br>
      Tanto si estás empezando como si coses habitualmente, tener los accesorios adecuados marca la diferencia en el resultado final.
    </p>
  </div>
</div>

<!-- Carrusel -->
<section class="producto-carousel container producto-compacta">
  <div class="carousel-wrapper mx-auto">
    <div id="carouselProductoDetalle" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <?php
        $imgs = [
          'alfiletero-tomate.png',
          'caja-imperdibles.png',
          'cinta-metrica.png',
          'dedal-metalico.png',
          'descosedor.png',
          'tijeras-costura.png',
          'tiza-sastre.png'
        ];
        foreach ($imgs as $i => $img) {
          echo '<button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="'.$i.'" '.($i === 0 ? 'class="active" aria-current="true"' : '').' aria-label="Slide '.($i + 1).'"></button>';
        }
        ?>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/catalogo/merceria/accesorios-costura/alfiletero-tomate.png" class="d-block w-100 rounded" alt="Alfiletero en forma de tomate">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/caja-imperdibles.png" class="d-block w-100 rounded" alt="Caja con imperdibles variados">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/cinta-metrica.png" class="d-block w-100 rounded" alt="Cinta métrica flexible de costura">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/dedal-metalico.png" class="d-block w-100 rounded" alt="Dedal metálico para costura a mano">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/descosedor.png" class="d-block w-100 rounded" alt="Descosedor para trabajos de precisión">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/tijeras-costura.png" class="d-block w-100 rounded" alt="Tijeras de costura profesional">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/accesorios-costura/tiza-sastre.png" class="d-block w-100 rounded" alt="Tiza de sastre para marcar telas">
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>

    </div>
  </div>
</section>

<!-- Tabs y Acordeón -->
<section class="container producto-compacta">
  <div class="w-75 mx-auto">

    <!-- Tabs para escritorio -->
    <div class="tabs-producto-container">
      <ul class="nav nav-tabs tabs-producto" id="tabsProducto" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="paraque-tab" data-bs-toggle="tab" data-bs-target="#paraque" type="button" role="tab">Para qué sirve</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="caracteristicas-tab" data-bs-toggle="tab" data-bs-target="#caracteristicas" type="button" role="tab">Características</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab">Tips</button>
        </li>
      </ul>

      <div class="tab-content tab-content-producto" id="tabsProductoContent">
        <!-- PARA QUÉ SIRVE -->
        <div class="tab-pane fade show active" id="paraque" role="tabpanel">
          <ul>
            <li>Medir patrones, dobladillos y cortes con precisión</li>
            <li>Sujetar telas con alfileres y evitar que se muevan al coser</li>
            <li>Cortar tela e hilos de forma limpia y cómoda</li>
            <li>Rematar y ajustar detalles en prendas y proyectos textiles</li>
            <li>Marcar líneas de costura y realizar pequeñas correcciones</li>
            <li>Facilitar arreglos rápidos y trabajos de costura diaria</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Herramientas básicas e imprescindibles para cualquier costurero</li>
            <li>Accesorios resistentes y pensados para uso frecuente</li>
            <li>Facilitan el trabajo en costura a mano y también con máquina</li>
            <li>Elementos de precisión como cintas métricas, marcadores y dedales</li>
            <li>Incluyen piezas prácticas para ordenar y trabajar con más comodidad</li>
            <li>Ideales para iniciación y también para proyectos más avanzados</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Usa tijeras solo para tela (no las mezcles con papel) para que no pierdan filo</li>
            <li>Coloca los alfileres en el mismo sentido de costura para retirarlos fácilmente</li>
            <li>Ten siempre un descosedor a mano: salva arreglos en segundos</li>
            <li>Guarda agujas y alfileres en un alfiletero para evitar pérdidas</li>
            <li>Mide dos veces antes de cortar: te ahorra errores y material</li>
            <li>Si vas a coser a mano, usa dedal para proteger el dedo y coser más cómodo</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Acordeón para móvil -->
    <div class="accordion accordion-producto-container" id="accordionProductoMobile">
      <!-- Contenido duplicado de tabs (idéntico al anterior, solo con estructura acordeón) -->
      <?php
      $tabs = [
        "Para qué sirve" => [
          "Medir patrones, dobladillos y cortes con precisión",
          "Sujetar telas con alfileres y evitar que se muevan al coser",
          "Cortar tela e hilos de forma limpia y cómoda",
          "Rematar y ajustar detalles en prendas y proyectos textiles",
          "Marcar líneas de costura y realizar pequeñas correcciones",
          "Facilitar arreglos rápidos y trabajos de costura diaria"
        ],
        "Características" => [
          "Herramientas básicas e imprescindibles para cualquier costurero",
          "Accesorios resistentes y pensados para uso frecuente",
          "Facilitan el trabajo en costura a mano y también con máquina",
          "Elementos de precisión como cintas métricas, marcadores y dedales",
          "Incluyen piezas prácticas para ordenar y trabajar con más comodidad",
          "Ideales para iniciación y también para proyectos más avanzados"
        ],
        "Tips" => [
          "Usa tijeras solo para tela (no las mezcles con papel) para que no pierdan filo",
          "Coloca los alfileres en el mismo sentido de costura para retirarlos fácilmente",
          "Ten siempre un descosedor a mano: salva arreglos en segundos",
          "Guarda agujas y alfileres en un alfiletero para evitar pérdidas",
          "Mide dos veces antes de cortar: te ahorra errores y material",
          "Si vas a coser a mano, usa dedal para proteger el dedo y coser más cómodo"
        ]
      ];
      $i = 0;
      foreach ($tabs as $title => $items) {
        $collapseId = strtolower(str_replace(' ', '', $title));
        echo '
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading'.$i.'">
            <button class="accordion-button'.($i > 0 ? ' collapsed' : '').'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="'.($i === 0 ? 'true' : 'false').'" aria-controls="collapse'.$i.'">
              '.$title.'
            </button>
          </h2>
          <div id="collapse'.$i.'" class="accordion-collapse collapse'.($i === 0 ? ' show' : '').'" data-bs-parent="#accordionProductoMobile">
            <div class="accordion-body">
              <ul>';
                foreach ($items as $item) {
                  echo '<li>'.$item.'</li>';
                }
        echo '    </ul>
            </div>
          </div>
        </div>';
        $i++;
      }
      ?>
    </div>
  </div>
</section>

<?php include '_partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
