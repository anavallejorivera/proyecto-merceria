<?php 
$title = "Larraz | Catálogo > Manualidades > Plantillas (stencils)";
$description = 'Página de Productos de Mercería';
$base = '../..';
require __DIR__ . '/../../includes/header.php'; 
require __DIR__ . '/../../includes/nav.php';
require __DIR__ . '/../../includes/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Plantillas (stencils)</h2>
    <p class="subtitulo-producto mb-1 lead">
      Las plantillas stencil son una forma rápida y muy efectiva de decorar superficies con diseños limpios y repetibles. Son ideales para crear patrones, letras y motivos decorativos en proyectos de manualidades, permitiendo personalizar madera, cartón, tela o paredes con un acabado profesional.
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
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/plantillas-stencils/coleccion-plantillas-stencil-motivos-variados.jpg" class="d-block w-100 rounded" alt="Colección de plantillas stencil">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/plantillas-stencils/kit-herramientas-estarcido-rodillo-pinceles.jpg" class="d-block w-100 rounded" alt="Kit de estarcido con rodillo y pinceles">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/plantillas-stencils/set-pinturas-y-pasta-textura-relieve.jpg" class="d-block w-100 rounded" alt="Set de pinturas y pasta de relieve">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/plantillas-stencils/muestras-decoracion-stencil-madera-carton.jpg" class="d-block w-100 rounded" alt="Decoración con stencil sobre madera y cartón">
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
            <li>Decorar madera, cartón, lienzo o papel de forma sencilla</li>
            <li>Crear letras y frases en proyectos DIY</li>
            <li>Añadir patrones repetidos en muebles, cajas o bandejas</li>
            <li>Personalizar paredes, carpetas o elementos decorativos</li>
            <li>Diseñar fondos para scrapbooking y manualidades</li>
            <li>Conseguir acabados limpios sin necesidad de dibujar a mano</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Fácil de usar y reutilizable si se limpia correctamente</li>
            <li>Permite resultados precisos y simétricos en segundos</li>
            <li>Disponible en muchos diseños: florales, geométricos, letras, etc.</li>
            <li>Compatible con pintura acrílica, rodillos, esponjas y tampones</li>
            <li>Ideal para aplicar también con pasta de relieve o texturas</li>
            <li>Apta para proyectos en casa, talleres y trabajos escolares</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Fija la plantilla con cinta de carrocero para que no se mueva</li>
            <li>Usa poca pintura y aplica a toques para evitar que se cuele por debajo</li>
            <li>Si usas rodillo, descarga antes el exceso de pintura</li>
            <li>Limpia la plantilla justo después de usarla para reutilizarla mejor</li>
            <li>Para efectos más pro, combina colores o crea degradados suaves</li>
            <li>Prueba el diseño primero en un papel antes de hacerlo sobre la superficie final</li>
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
              <li>Decorar madera, cartón, lienzo o papel de forma sencilla</li>
              <li>Crear letras y frases en proyectos DIY</li>
              <li>Añadir patrones repetidos en muebles, cajas o bandejas</li>
              <li>Personalizar paredes, carpetas o elementos decorativos</li>
              <li>Diseñar fondos para scrapbooking y manualidades</li>
              <li>Conseguir acabados limpios sin necesidad de dibujar a mano</li>
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
              <li>Fácil de usar y reutilizable si se limpia correctamente</li>
              <li>Permite resultados precisos y simétricos en segundos</li>
              <li>Disponible en muchos diseños: florales, geométricos, letras, etc.</li>
              <li>Compatible con pintura acrílica, rodillos, esponjas y tampones</li>
              <li>Ideal para aplicar también con pasta de relieve o texturas</li>
              <li>Apta para proyectos en casa, talleres y trabajos escolares</li>
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
              <li>Fija la plantilla con cinta de carrocero para que no se mueva</li>
              <li>Usa poca pintura y aplica a toques para evitar que se cuele por debajo</li>
              <li>Si usas rodillo, descarga antes el exceso de pintura</li>
              <li>Limpia la plantilla justo después de usarla para reutilizarla mejor</li>
              <li>Para efectos más pro, combina colores o crea degradados suaves</li>
              <li>Prueba el diseño primero en un papel antes de hacerlo sobre la superficie final</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
