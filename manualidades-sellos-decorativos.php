<?php 
$title = "Larraz | Catálogo > Manualidades > Sellos Decorativos";
$description = 'Página de Productos de Mercería';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Sellos Decorativos</h2>
    <p class="subtitulo-producto mb-1 lead">
      Los sellos decorativos son un recurso perfecto para personalizar manualidades de forma rápida y creativa. Permiten añadir dibujos, letras y texturas sobre papel, cartón, tela o madera, logrando acabados únicos en proyectos de scrapbooking, decoración y DIY.
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
          <img src="assets/img/catalogo/manualidades/sellos-decorativos/sellos-madera-motivos-florales.jpg" class="d-block w-100 rounded" alt="Sellos florales de madera">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/sellos-decorativos/caja-sellos-abecedario-madera.jpg" class="d-block w-100 rounded" alt="Caja de sellos de letras">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/sellos-decorativos/kit-sellos-silicona-bloques-metacrilato.jpg" class="d-block w-100 rounded" alt="Kit de sellos de silicona">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/manualidades/sellos-decorativos/pack-tampones-tinta-varios-colores.jpg" class="d-block w-100 rounded" alt="Tinta de colores para sellos">
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
            <li>Decorar tarjetas, invitaciones y papel de regalo</li>
            <li>Personalizar cuadernos, agendas y álbumes de scrapbooking</li>
            <li>Crear etiquetas, sellos con letras y mensajes</li>
            <li>Añadir patrones y texturas a manualidades DIY</li>
            <li>Estampar sobre cartón, madera o tela (según tinta)</li>
            <li>Dar un toque creativo a proyectos escolares y talleres</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Fácil de usar y apto para todos los niveles</li>
            <li>Disponible en madera, silicona o goma según el tipo de sello</li>
            <li>Gran variedad de formas: letras, flores, patrones y dibujos</li>
            <li>Permite combinar diferentes colores de tinta</li>
            <li>Ideal para crear composiciones repetidas con precisión</li>
            <li>Perfecto para decorar sin necesidad de dibujar a mano</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Prueba el sello primero en un papel aparte para ajustar la presión</li>
            <li>Usa tintas adecuadas según el material (papel, tela, madera, etc.)</li>
            <li>Limpia el sello después de usarlo para que dure más tiempo</li>
            <li>Para estampar recto, presiona firme y sin mover la mano</li>
            <li>Combina varios sellos para crear diseños más completos</li>
            <li>Guarda las tintas cerradas para evitar que se sequen</li>
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
              <li>Decorar tarjetas, invitaciones y papel de regalo</li>
              <li>Personalizar cuadernos, agendas y álbumes de scrapbooking</li>
              <li>Crear etiquetas, sellos con letras y mensajes</li>
              <li>Añadir patrones y texturas a manualidades DIY</li>
              <li>Estampar sobre cartón, madera o tela (según tinta)</li>
              <li>Dar un toque creativo a proyectos escolares y talleres</li>
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
              <li>Fácil de usar y apto para todos los niveles</li>
              <li>Disponible en madera, silicona o goma según el tipo de sello</li>
              <li>Gran variedad de formas: letras, flores, patrones y dibujos</li>
              <li>Permite combinar diferentes colores de tinta</li>
              <li>Ideal para crear composiciones repetidas con precisión</li>
              <li>Perfecto para decorar sin necesidad de dibujar a mano</li>
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
              <li>Prueba el sello primero en un papel aparte para ajustar la presión</li>
              <li>Usa tintas adecuadas según el material (papel, tela, madera, etc.)</li>
              <li>Limpia el sello después de usarlo para que dure más tiempo</li>
              <li>Para estampar recto, presiona firme y sin mover la mano</li>
              <li>Combina varios sellos para crear diseños más completos</li>
              <li>Guarda las tintas cerradas para evitar que se sequen</li>
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
