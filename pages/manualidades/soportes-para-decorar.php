<?php 
$title = "Larraz | Catálogo > Manualidades > Soportes Para Decorar";
$description = 'Página de Productos de Mercería';
$base = '../..';
require __DIR__ . '/../../includes/header.php'; 
require __DIR__ . '/../../includes/nav.php';
require __DIR__ . '/../../includes/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Soportes Para Decorar</h2>
    <p class="subtitulo-producto mb-1 lead">
      Los soportes para decorar son la base perfecta para crear proyectos de manualidades personalizados. Con ellos puedes pintar, forrar, estampar o aplicar técnicas como stencil y decoupage, transformando objetos simples en piezas únicas para regalar, organizar o decorar tu casa.
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
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/soportes-para-decorar/maletin-carton-kraft-manualidades.jpg" class="d-block w-100 rounded" alt="Maletín de cartón kraft para manualidades">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/soportes-para-decorar/marco-fotos-carton-basico.jpg" class="d-block w-100 rounded" alt="Marco de fotos de cartón básico">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/soportes-para-decorar/caja-madera-tapa-cristal-organizadora.jpg" class="d-block w-100 rounded" alt="Caja de madera con tapa de cristal para organizar">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/soportes-para-decorar/casa-pajaros-madera-decorar.jpg" class="d-block w-100 rounded" alt="Casa de pájaros de madera para decorar">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $base; ?>/assets/img/catalogo/manualidades/soportes-para-decorar/letra-madera-decorativa-a.jpg" class="d-block w-100 rounded" alt="Letra decorativa de madera">
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
            <li>Pintar y personalizar cajas, marcos y letras decorativas</li>
            <li>Crear regalos únicos hechos a mano para cualquier ocasión</li>
            <li>Organizar materiales o recuerdos con cajas decoradas</li>
            <li>Decorar habitaciones infantiles con figuras y letras de madera</li>
            <li>Diseñar elementos de decoración para el hogar (DIY)</li>
            <li>Practicar técnicas creativas como stencil, decoupage o scrap</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Superficies listas para decorar con múltiples técnicas</li>
            <li>Materiales variados: cartón kraft, madera o bases rígidas</li>
            <li>Ideales para pintar con acrílicos, rotuladores o sprays</li>
            <li>Se pueden forrar con papel decorativo, tela o vinilo</li>
            <li>Permiten crear proyectos resistentes y duraderos</li>
            <li>Perfectos para principiantes y también para trabajos más detallados</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Lija suavemente la madera antes de pintar para un acabado más fino</li>
            <li>Aplica una capa de imprimación si quieres colores más vivos</li>
            <li>Usa cinta de carrocero para delimitar zonas y hacer diseños limpios</li>
            <li>Para proteger el resultado final, aplica barniz o sellador</li>
            <li>Si forras con papel, utiliza cola blanca diluida o pegamento especial</li>
            <li>Combina técnicas (stencil + pintura + detalles) para un resultado más pro</li>
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
              <li>Pintar y personalizar cajas, marcos y letras decorativas</li>
              <li>Crear regalos únicos hechos a mano para cualquier ocasión</li>
              <li>Organizar materiales o recuerdos con cajas decoradas</li>
              <li>Decorar habitaciones infantiles con figuras y letras de madera</li>
              <li>Diseñar elementos de decoración para el hogar (DIY)</li>
              <li>Practicar técnicas creativas como stencil, decoupage o scrap</li>
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
              <li>Superficies listas para decorar con múltiples técnicas</li>
              <li>Materiales variados: cartón kraft, madera o bases rígidas</li>
              <li>Ideales para pintar con acrílicos, rotuladores o sprays</li>
              <li>Se pueden forrar con papel decorativo, tela o vinilo</li>
              <li>Permiten crear proyectos resistentes y duraderos</li>
              <li>Perfectos para principiantes y también para trabajos más detallados</li>
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
              <li>Lija suavemente la madera antes de pintar para un acabado más fino</li>
              <li>Aplica una capa de imprimación si quieres colores más vivos</li>
              <li>Usa cinta de carrocero para delimitar zonas y hacer diseños limpios</li>
              <li>Para proteger el resultado final, aplica barniz o sellador</li>
              <li>Si forras con papel, utiliza cola blanca diluida o pegamento especial</li>
              <li>Combina técnicas (stencil + pintura + detalles) para un resultado más pro</li>
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
