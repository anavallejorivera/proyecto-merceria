<?php 
$title = "Larraz | Catálogo > Mercería > Cintas y Elásticos";
$description = 'Elementos esenciales para ajustar, decorar y rematar: cintas, lazos y elásticos';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Cintas y Elásticos</h2>
    <p class="subtitulo-producto mb-1 lead">
      Las cintas y elásticos son básicos indispensables en mercería para rematar, ajustar y decorar cualquier proyecto de costura.<br>
      Desde cintas de raso y decorativas hasta elásticos resistentes para prendas y complementos, son perfectos para dar un acabado limpio, práctico y con estilo.<br><br>
      Ideales tanto para confección como para arreglos rápidos, DIY y personalización de ropa y accesorios.
    </p>
  </div>
</div>

<!-- Carrusel -->
<section class="producto-carousel container producto-compacta">
  <div class="carousel-wrapper mx-auto">
    <div id="carouselProductoDetalle" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/catalogo/merceria/cintas-elasticos/cinta-raso-roja.png" class="d-block w-100 rounded" alt="Cinta de raso roja decorativa">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/cintas-elasticos/goma-elastica-blanca.png" class="d-block w-100 rounded" alt="Goma elástica blanca para prendas">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/cintas-elasticos/metro-flexometro.png" class="d-block w-100 rounded" alt="Metro o flexómetro para costura">
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
            <li>Ajustar prendas como faldas, pantalones o ropa deportiva con elásticos</li>
            <li>Rematar bordes y dar acabado a prendas y proyectos textiles</li>
            <li>Decorar lazos, regalos, accesorios y detalles de costura creativa</li>
            <li>Crear cinturillas, frunces y adaptaciones cómodas en ropa</li>
            <li>Hacer complementos como coleteros, diademas o adornos para el pelo</li>
            <li>Añadir tiras y cintas decorativas a ropa, bolsos o manualidades</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Variedad de cintas: lisas, estampadas, de raso y decorativas</li>
            <li>Elásticos en distintos anchos para cada tipo de prenda o ajuste</li>
            <li>Materiales resistentes y flexibles, pensados para uso continuo</li>
            <li>Disponible en diferentes colores para combinar con cada proyecto</li>
            <li>Perfectos para acabados profesionales y remates limpios</li>
            <li>Opciones tanto funcionales (ajuste) como decorativas (detalle final)</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Elige el ancho del elástico según la prenda: más ancho = más sujeción</li>
            <li>Antes de coser, prueba la medida rodeando la zona para ajustar bien</li>
            <li>Para que el elástico dure, evita estirarlo al máximo al coserlo</li>
            <li>Si es cinta decorativa, sella la punta con calor suave para que no se deshilache</li>
            <li>Usa alfileres o pinzas para sujetar bien la cinta antes de coser</li>
            <li>Guarda cintas enrolladas para que no se arruguen ni se enreden</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Acordeón para móvil -->
    <div class="accordion accordion-producto-container" id="accordionProductoMobile">

      <!-- PARA QUÉ SIRVE -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingParaque">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseParaque">Para qué sirve</button>
        </h2>
        <div id="collapseParaque" class="accordion-collapse collapse show" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Ajustar prendas como faldas, pantalones o ropa deportiva con elásticos</li>
              <li>Rematar bordes y dar acabado a prendas y proyectos textiles</li>
              <li>Decorar lazos, regalos, accesorios y detalles de costura creativa</li>
              <li>Crear cinturillas, frunces y adaptaciones cómodas en ropa</li>
              <li>Hacer complementos como coleteros, diademas o adornos para el pelo</li>
              <li>Añadir tiras y cintas decorativas a ropa, bolsos o manualidades</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CARACTERÍSTICAS -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCaracteristicas">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCaracteristicas">Características</button>
        </h2>
        <div id="collapseCaracteristicas" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Variedad de cintas: lisas, estampadas, de raso y decorativas</li>
              <li>Elásticos en distintos anchos para cada tipo de prenda o ajuste</li>
              <li>Materiales resistentes y flexibles, pensados para uso continuo</li>
              <li>Disponible en diferentes colores para combinar con cada proyecto</li>
              <li>Perfectos para acabados profesionales y remates limpios</li>
              <li>Opciones tanto funcionales (ajuste) como decorativas (detalle final)</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- TIPS -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTips">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTips">Tips</button>
        </h2>
        <div id="collapseTips" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Elige el ancho del elástico según la prenda: más ancho = más sujeción</li>
              <li>Antes de coser, prueba la medida rodeando la zona para ajustar bien</li>
              <li>Para que el elástico dure, evita estirarlo al máximo al coserlo</li>
              <li>Si es cinta decorativa, sella la punta con calor suave para que no se deshilache</li>
              <li>Usa alfileres o pinzas para sujetar bien la cinta antes de coser</li>
              <li>Guarda cintas enrolladas para que no se arruguen ni se enreden</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include '_partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
