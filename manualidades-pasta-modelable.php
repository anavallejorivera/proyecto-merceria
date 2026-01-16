<?php 
$title = "Larraz | Catálogo > Manualidades > Pasta Modelable";
$description = 'Página de Productos de Mercería';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Pasta Modelable</h2>
    <p class="subtitulo-producto mb-1 lead">
      La pasta modelable es un material creativo y muy fácil de trabajar, perfecto para manualidades, decoración y proyectos DIY. Permite dar forma a figuras, adornos y detalles personalizados, logrando acabados originales tanto en casa como en talleres escolares.
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
          <img src="assets/img/catalogo/manualidades/pasta-modelable/pack-pasta-moldeable-bloque-blanco.jpg" class="d-block w-100 rounded" alt="Bloque de Pasta Modelable">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/pasta-modelable/set-herramientas-modelado-manualidades.jpg" class="d-block w-100 rounded" alt="Herramientas de Modelado">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/pasta-modelable/figuras-decorativas-pasta-secado-aire.jpg" class="d-block w-100 rounded" alt="Figuras Decorativas de Pasta">
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
            <li>Crear figuras, formas y adornos decorativos</li>
            <li>Hacer manualidades escolares y proyectos creativos</li>
            <li>Elaborar miniaturas, detalles y piezas personalizadas</li>
            <li>Realizar marcos, letras y elementos para decorar</li>
            <li>Fabricar sellos o texturas con herramientas de modelado</li>
            <li>Complementar proyectos de scrapbooking y decoración DIY</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Fácil de moldear y apta para principiantes</li>
            <li>Permite alisar, cortar y dar forma con precisión</li>
            <li>Se puede trabajar con herramientas sencillas (rodillo, estecas, moldes)</li>
            <li>Acabado suave y personalizable</li>
            <li>Se puede pintar o decorar una vez terminada (según el tipo de pasta)</li>
            <li>Ideal para trabajar en casa o en talleres creativos</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Amasa bien antes de empezar para que sea más flexible</li>
            <li>Trabaja sobre una superficie limpia para evitar marcas o suciedad</li>
            <li>Usa rodillo para conseguir láminas uniformes</li>
            <li>Si se pega, espolvorea un poco de harina/maicena o usa papel vegetal</li>
            <li>Para detalles finos, utiliza herramientas de modelado o palillos</li>
            <li>Deja secar completamente antes de pintar o barnizar la pieza</li>
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
              <li>Crear figuras, formas y adornos decorativos</li>
              <li>Hacer manualidades escolares y proyectos creativos</li>
              <li>Elaborar miniaturas, detalles y piezas personalizadas</li>
              <li>Realizar marcos, letras y elementos para decorar</li>
              <li>Fabricar sellos o texturas con herramientas de modelado</li>
              <li>Complementar proyectos de scrapbooking y decoración DIY</li>
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
              <li>Fácil de moldear y apta para principiantes</li>
              <li>Permite alisar, cortar y dar forma con precisión</li>
              <li>Se puede trabajar con herramientas sencillas (rodillo, estecas, moldes)</li>
              <li>Acabado suave y personalizable</li>
              <li>Se puede pintar o decorar una vez terminada (según el tipo de pasta)</li>
              <li>Ideal para trabajar en casa o en talleres creativos</li>
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
              <li>Amasa bien antes de empezar para que sea más flexible</li>
              <li>Trabaja sobre una superficie limpia para evitar marcas o suciedad</li>
              <li>Usa rodillo para conseguir láminas uniformes</li>
              <li>Si se pega, espolvorea un poco de harina/maicena o usa papel vegetal</li>
              <li>Para detalles finos, utiliza herramientas de modelado o palillos</li>
              <li>Deja secar completamente antes de pintar o barnizar la pieza</li>
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
