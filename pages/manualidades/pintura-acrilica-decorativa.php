
<?php 
 $title = "Larraz | Catálogo > Manualidades > Pintura Acrílica Decorativa";
 $description = 'Página de Productos de Mercería';
$base = '../..';
require __DIR__ . '/../../includes/header.php';?>
<?php require __DIR__ . '/../../includes/nav.php';?>


<!-- AQUÍ IRÁ LA MIGA DE PAN -->
<?php require __DIR__ . '/../../includes/breadcrumb.php'; ?>



<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Pintura Acrílica Decorativa</h2>
    <p class="subtitulo-producto mb-1 lead">
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
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/pintura-acrilica/gama-completa-tubos-pintura-acrilica.jpg" class="d-block w-100 rounded" alt="Colores Vibrantes en Tubo">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/pintura-acrilica/set-tarros-pintura-acrilica-decorativa.jpg" class="d-block w-100 rounded" alt="Tarros de Alta Cobertura">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/pintura-acrilica/kit-pinceles-varios-tamanos-manualidades.jpg" class="d-block w-100 rounded" alt="Pinceles de Precisión">
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
          <button class="nav-link active" id="paraque-tab" data-bs-toggle="tab" data-bs-target="#paraque" type="button" role="tab">
            Para qué sirve
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="caracteristicas-tab" data-bs-toggle="tab" data-bs-target="#caracteristicas" type="button" role="tab">
            Características
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab">
            Tips
          </button>
        </li>
      </ul>

      <div class="tab-content tab-content-producto" id="tabsProductoContent">
        
        <!-- PARA QUÉ SIRVE -->
        <div class="tab-pane fade show active" id="paraque" role="tabpanel">
          <ul>
            <li>Pintar y decorar madera</li>
            <li>Manualidades en papel y cartón</li>
            <li>Proyectos sobre lienzo</li>
            <li>Trabajos creativos con goma EVA</li>
            <li>Decoración en cerámica y escayola</li>
            <li>Personalización de soportes decorativos</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Secado rápido</li>
            <li>Colores intensos y uniformes</li>
            <li>Buena cobertura con pocas capas</li>
            <li>Acabado resistente una vez seco</li>
            <li>Aplicación fácil con pincel, rodillo o esponja</li>
            <li>Se puede mezclar para crear nuevos tonos</li>
          </ul>
        </div>

        <!-- CÓMO USARLA (TIPS) -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Agita bien antes de usar</li>
            <li>Aplica sobre superficies limpias y secas</li>
            <li>Da capas finas y deja secar entre ellas</li>
            <li>Usa el aplicador adecuado: pincel, rodillo o esponja</li>
            <li>Para mayor durabilidad, aplica un barniz o sellador final</li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Acordeón (móvil) -->
    <div class="accordion accordion-producto-container" id="accordionProductoMobile">

      <!-- PARA QUÉ SIRVE -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingParaque">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseParaque">
            Para qué sirve
          </button>
        </h2>

        <div id="collapseParaque" class="accordion-collapse collapse show" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Pintar y decorar madera</li>
              <li>Manualidades en papel y cartón</li>
              <li>Proyectos sobre lienzo</li>
              <li>Trabajos creativos con goma EVA</li>
              <li>Decoración en cerámica y escayola</li>
              <li>Personalización de soportes decorativos</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CARACTERÍSTICAS -->
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
              <li>Aplicación fácil con pincel, rodillo o esponja</li>
              <li>Se puede mezclar para crear nuevos tonos</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CÓMO USARLA (TIPS) -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTips">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTips">
            Tips
          </button>
        </h2>

        <div id="collapseTips" class="accordion-collapse collapse" data-bs-parent="#accordionProductoMobile">
          <div class="accordion-body">
            <ul>
              <li>Agita bien antes de usar</li>
              <li>Aplica sobre superficies limpias y secas</li>
              <li>Da capas finas y deja secar entre ellas</li>
              <li>Usa el aplicador adecuado: pincel, rodillo o esponja</li>
              <li>Para mayor durabilidad, aplica un barniz o sellador final</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
















<?php
include __DIR__ . '/../../includes/footer.php';
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
