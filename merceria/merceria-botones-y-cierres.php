<?php 
$title = "Larraz | Catálogo > Mercería > Botones y Cierres";
$description = 'Detalles funcionales y decorativos: botones, cierres, cremalleras, broches';
require 'includes/header.php'; 
require 'includes/nav.php';
require 'includes/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Botones y Cierres</h2>
    <p class="subtitulo-producto mb-1 lead">
      Los botones y cierres son ese detalle imprescindible que marca la diferencia en cualquier prenda o complemento.<br>
      Sirven tanto para dar un acabado funcional como para aportar un toque decorativo, permitiendo ajustar, cerrar o transformar prendas y accesorios de forma práctica y elegante.<br><br>
      Ideales para arreglos, confección desde cero y personalización, con opciones para todos los estilos y necesidades.
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
          <img src="assets/img/catalogo/merceria/botones-cierres/botones-surtidos.png" class="d-block w-100 rounded" alt="Botones surtidos de varios colores y tamaños">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/botones-cierres/corchetes-presion.png" class="d-block w-100 rounded" alt="Corchetes de presión metálicos">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/botones-cierres/cremallera-gris.png" class="d-block w-100 rounded" alt="Cremallera gris de plástico">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/botones-cierres/hebillas-metalicas.png" class="d-block w-100 rounded" alt="Hebillas metálicas para cierres de cinturones o bolsos">
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
            <li>Cerrar chaquetas, camisas, bolsos y prendas de todo tipo</li>
            <li>Sustituir botones perdidos o reparar cierres dañados</li>
            <li>Ajustar prendas con cierres cómodos y resistentes</li>
            <li>Personalizar ropa con botones decorativos y diferentes acabados</li>
            <li>Crear complementos y accesorios textiles con cierres seguros</li>
            <li>Añadir broches y corchetes a prendas infantiles o proyectos DIY</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Gran variedad de botones: clásicos, decorativos, grandes y pequeños</li>
            <li>Diferentes materiales y estilos para combinar con cualquier tejido</li>
            <li>Cierres prácticos como cremalleras, corchetes y broches de presión</li>
            <li>Opciones resistentes para uso diario y prendas de mucho movimiento</li>
            <li>Disponible en distintos colores para que el acabado quede integrado</li>
            <li>Elementos fáciles de coser o colocar según el tipo de cierre</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Antes de elegir, mide el diámetro del botón y el tamaño del ojal</li>
            <li>Si cambias un botón, intenta sustituirlos todos para que queden iguales</li>
            <li>Para cremalleras, comprueba largo y tipo (separable o cerrada)</li>
            <li>Refuerza el hilo en botones de abrigos o prendas gruesas</li>
            <li>Si es para ropa infantil, mejor cierres cómodos y resistentes</li>
            <li>Guarda botones sueltos por colores en bolsitas para encontrarlos rápido</li>
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
              <li>Cerrar chaquetas, camisas, bolsos y prendas de todo tipo</li>
              <li>Sustituir botones perdidos o reparar cierres dañados</li>
              <li>Ajustar prendas con cierres cómodos y resistentes</li>
              <li>Personalizar ropa con botones decorativos y diferentes acabados</li>
              <li>Crear complementos y accesorios textiles con cierres seguros</li>
              <li>Añadir broches y corchetes a prendas infantiles o proyectos DIY</li>
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
              <li>Gran variedad de botones: clásicos, decorativos, grandes y pequeños</li>
              <li>Diferentes materiales y estilos para combinar con cualquier tejido</li>
              <li>Cierres prácticos como cremalleras, corchetes y broches de presión</li>
              <li>Opciones resistentes para uso diario y prendas de mucho movimiento</li>
              <li>Disponible en distintos colores para que el acabado quede integrado</li>
              <li>Elementos fáciles de coser o colocar según el tipo de cierre</li>
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
              <li>Antes de elegir, mide el diámetro del botón y el tamaño del ojal</li>
              <li>Si cambias un botón, intenta sustituirlos todos para que queden iguales</li>
              <li>Para cremalleras, comprueba largo y tipo (separable o cerrada)</li>
              <li>Refuerza el hilo en botones de abrigos o prendas gruesas</li>
              <li>Si es para ropa infantil, mejor cierres cómodos y resistentes</li>
              <li>Guarda botones sueltos por colores en bolsitas para encontrarlos rápido</li>
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
