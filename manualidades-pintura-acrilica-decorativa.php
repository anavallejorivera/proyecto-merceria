<?php
// Aquí irá tu código PHP
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Larraz | Catálogo > Manualidades > Pintura Acrílica Decorativa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/productos.css" rel="stylesheet">
  
</head>
<body>

<?php
include '_partials/header.php';
?>




<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 pt-5 producto-compactamd container-md">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Pintura Acrílica Decorativa</h2>
    <p class="subtitulo-producto mb-1">
      La pintura acrílica decorativa es un material versátil y fácil de usar, ideal para proyectos de manualidades, decoración y DIY. Destaca por su secado rápido, su alta cobertura y su excelente adherencia sobre múltiples superficies.
    </p>
  </div>
</div>






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
          <img src="assets/img/catalogo/manualidades/pintura-acrilica/gama-completa-tubos-pintura-acrilica.jpg" class="d-block w-100 rounded" alt="Colores Vibrantes en Tubo">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/pintura-acrilica/set-tarros-pintura-acrilica-decorativa.jpg" class="d-block w-100 rounded" alt="Tarros de Alta Cobertura">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/pintura-acrilica/kit-pinceles-varios-tamanos-manualidades.jpg" class="d-block w-100 rounded" alt="Pinceles de Precisión">
          <div class="carousel-caption d-none d-md-block">
          </div>
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












<section class="container producto-compacta">
  <div class="w-75 mx-auto">

    <!-- Tabs (desktop) -->
    <div class="tabs-producto-container">
      <ul class="nav nav-tabs tabs-producto" id="tabsProducto" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="paraque-tab" data-bs-toggle="tab" data-bs-target="#paraque" type="button" role="tab">Para que sirve</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="caracteristicas-tab" data-bs-toggle="tab" data-bs-target="#caracteristicas" type="button" role="tab">Características</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="consejos-tab" data-bs-toggle="tab" data-bs-target="#consejos" type="button" role="tab">Consejos</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ideal-tab" data-bs-toggle="tab" data-bs-target="#ideal" type="button" role="tab">Ideal para</button>
        </li>
      </ul>

      <div class="tab-content tab-content-producto" id="tabsProductoContent">
        <div class="tab-pane fade show active" id="paraque" role="tabpanel">
          <ul>
            <li>Madera</li>
            <li>Papel y cartón</li>
            <li>Lienzo</li>
            <li>Goma EVA</li>
            <li>Cerámica y escayola</li>
            <li>Soportes decorativos</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Secado rápido</li>
            <li>Colores intensos y uniformes</li>
            <li>Buena cobertura con pocas capas</li>
            <li>Acabado resistente una vez seco</li>
            <li>Fácil aplicación con pincel, rodillo o esponja</li>
            <li>Se puede mezclar para crear nuevos tonos</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="consejos" role="tabpanel">
          <ul>
            <li>Agitar bien antes de usar</li>
            <li>Aplicar sobre superficies limpias y secas</li>
            <li>Usar pinceles o aplicadores adecuados al detalle del trabajo</li>
            <li>Dejar secar completamente entre capas</li>
            <li>Sellar el trabajo final si se desea mayor durabilidad</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="ideal" role="tabpanel">
          <ul>
            <li>Manualidades y decoración del hogar</li>
            <li>Proyectos escolares y creativos</li>
            <li>Técnicas como decoupage o stencil</li>
            <li>Regalos personalizados</li>
            <li>Trabajos artesanales y DIY</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Acordeón (móvil) -->
    <div class="accordion accordion-producto-container" id="accordionProductoMobile">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingParaque">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseParaque">
            Para que sirve
          </button>
        </h2>
        <div id="collapseParaque" class="accordion-collapse collapse show" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Madera</li>
              <li>Papel y cartón</li>
              <li>Lienzo</li>
              <li>Goma EVA</li>
              <li>Cerámica y escayola</li>
              <li>Soportes decorativos</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCaracteristicas">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCaracteristicas">
            Características
          </button>
        </h2>
        <div id="collapseCaracteristicas" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Secado rápido</li>
              <li>Colores intensos y uniformes</li>
              <li>Buena cobertura con pocas capas</li>
              <li>Acabado resistente una vez seco</li>
              <li>Fácil aplicación con pincel, rodillo o esponja</li>
              <li>Se puede mezclar para crear nuevos tonos</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingConsejos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseConsejos">
            Consejos
          </button>
        </h2>
        <div id="collapseConsejos" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Agitar bien antes de usar</li>
              <li>Aplicar sobre superficies limpias y secas</li>
              <li>Usar pinceles o aplicadores adecuados al detalle del trabajo</li>
              <li>Dejar secar completamente entre capas</li>
              <li>Sellar el trabajo final si se desea mayor durabilidad</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingIdeal">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIdeal">
            Ideal para
          </button>
        </h2>
        <div id="collapseIdeal" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Manualidades y decoración del hogar</li>
              <li>Proyectos escolares y creativos</li>
              <li>Técnicas como decoupage o stencil</li>
              <li>Regalos personalizados</li>
              <li>Trabajos artesanales y DIY</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>















<?php
include '_partials/footer.php';
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
