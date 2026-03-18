<?php 
$title = "Larraz | Catálogo > Manualidades > Goma EVA";
$description = 'Página de Productos de Mercería';
require 'includes/header.php'; 
require 'includes/nav.php';
require 'includes/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Goma EVA</h2>
    <p class="subtitulo-producto mb-1 lead">
      La goma EVA es uno de los materiales más populares en manualidades por su ligereza, flexibilidad y facilidad de uso. Es ideal para crear figuras, decoraciones y proyectos creativos tanto infantiles como para trabajos DIY, ya que se recorta y se pega con mucha facilidad.
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
          <img src="assets/img/catalogo/manualidades/goma-eva/pack-laminas-goma-eva-multicolor.jpg" class="d-block w-100 rounded" alt="Pack de láminas de goma EVA multicolor">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/goma-eva/set-herramientas-tijeras-barras-silicona.jpg" class="d-block w-100 rounded" alt="Set de herramientas para trabajar con goma EVA">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/goma-eva/marco-fotos-decorado-figuras-infantiles.jpg" class="d-block w-100 rounded" alt="Marco de fotos decorado con figuras de goma EVA">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/goma-eva/ramo-flores-foami-manualidades.jpg" class="d-block w-100 rounded" alt="Ramo de flores hechas con goma EVA">
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
            <li>Crear figuras y decoraciones para manualidades infantiles</li>
            <li>Hacer flores, marcos, letras y adornos personalizados</li>
            <li>Decorar carpetas, cuadernos y proyectos escolares</li>
            <li>Preparar disfraces, complementos y accesorios DIY</li>
            <li>Realizar llaveros, imanes y elementos decorativos ligeros</li>
            <li>Dar volumen y color a proyectos creativos de forma fácil</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Material ligero, flexible y muy fácil de cortar</li>
            <li>Disponible en muchos colores y grosores diferentes</li>
            <li>Se puede pegar con silicona caliente, pegamento o cinta de doble cara</li>
            <li>Apta para trabajos infantiles por su facilidad de manejo</li>
            <li>Permite crear capas para dar relieve y profundidad</li>
            <li>Se puede combinar con rotuladores, purpurina y otros materiales</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Marca las piezas primero con lápiz antes de recortar</li>
            <li>Usa tijeras afiladas o cúter para cortes más limpios</li>
            <li>Para pegar, aplica poca silicona y presiona unos segundos</li>
            <li>Si quieres volumen, superpone capas de goma EVA</li>
            <li>Guarda las láminas en plano para que no se doblen</li>
            <li>Para un acabado más pro, combina colores y añade detalles con rotulador</li>
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
              <li>Crear figuras y decoraciones para manualidades infantiles</li>
              <li>Hacer flores, marcos, letras y adornos personalizados</li>
              <li>Decorar carpetas, cuadernos y proyectos escolares</li>
              <li>Preparar disfraces, complementos y accesorios DIY</li>
              <li>Realizar llaveros, imanes y elementos decorativos ligeros</li>
              <li>Dar volumen y color a proyectos creativos de forma fácil</li>
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
              <li>Material ligero, flexible y muy fácil de cortar</li>
              <li>Disponible en muchos colores y grosores diferentes</li>
              <li>Se puede pegar con silicona caliente, pegamento o cinta de doble cara</li>
              <li>Apta para trabajos infantiles por su facilidad de manejo</li>
              <li>Permite crear capas para dar relieve y profundidad</li>
              <li>Se puede combinar con rotuladores, purpurina y otros materiales</li>
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
              <li>Marca las piezas primero con lápiz antes de recortar</li>
              <li>Usa tijeras afiladas o cúter para cortes más limpios</li>
              <li>Para pegar, aplica poca silicona y presiona unos segundos</li>
              <li>Si quieres volumen, superpone capas de goma EVA</li>
              <li>Guarda las láminas en plano para que no se doblen</li>
              <li>Para un acabado más pro, combina colores y añade detalles con rotulador</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
