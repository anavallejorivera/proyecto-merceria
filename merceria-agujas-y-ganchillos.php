<?php 
$title = "Larraz | Catálogo > Mercería > Agujas y Ganchillos";
$description = 'Herramientas esenciales para costura y tejido: Agujas y Ganchillos';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Agujas y Ganchillos</h2>
    <p class="subtitulo-producto mb-1 lead">
      Las agujas y ganchillos son herramientas esenciales para dar vida a proyectos de costura y tejido, desde los más sencillos hasta los más detallados.<br>
      Con ellos puedes crear prendas, accesorios y decoraciones hechas a mano, trabajando con precisión y comodidad en cada punto.<br><br>
      Ideales tanto para principiantes como para quienes disfrutan tejiendo y cosiendo con un acabado cuidado y profesional.
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
        <button type="button" data-bs-target="#carouselProductoDetalle" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/agujas-punto-madera.png" class="d-block w-100 rounded" alt="Agujas de punto de madera">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/cinta-metrica-pequena.png" class="d-block w-100 rounded" alt="Cinta métrica pequeña para costura">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/ganchillo-ergonomico.png" class="d-block w-100 rounded" alt="Ganchillo ergonómico para tejer cómodamente">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/ganchillos-colores.png" class="d-block w-100 rounded" alt="Set de ganchillos de colores variados">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/marcadores-puntos.png" class="d-block w-100 rounded" alt="Marcadores de puntos para tejido">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/agujas-y-ganchillo/set-agujas-estuche.png" class="d-block w-100 rounded" alt="Set de agujas en estuche">
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
            <li>Tejer prendas y accesorios con agujas de punto</li>
            <li>Realizar proyectos de ganchillo como gorros, bolsos o amigurumis</li>
            <li>Coser a mano arreglos, remates y pequeñas reparaciones</li>
            <li>Bordar detalles decorativos en tela o ropa</li>
            <li>Unir piezas tejidas y rematar costuras con aguja lanera</li>
            <li>Sujetar puntos y marcar vueltas con accesorios auxiliares</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Disponibles en diferentes grosores para adaptarse a cada tipo de hilo o lana</li>
            <li>Agujas para coser, bordar y lana en varios tamaños</li>
            <li>Ganchillos cómodos para tejer con facilidad y buena sujeción</li>
            <li>Materiales resistentes y ligeros, perfectos para uso continuo</li>
            <li>Permiten trabajar con precisión tanto en piezas grandes como en detalles pequeños</li>
            <li>Accesorios útiles como marcadores y cintas métricas para mejorar el proceso</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Usa el grosor de aguja o ganchillo recomendado en la etiqueta del ovillo</li>
            <li>Si eres principiante, empieza con lana media y ganchillo cómodo de sujetar</li>
            <li>Para evitar que se te cansen las manos, descansa y estira cada cierto tiempo</li>
            <li>Guarda agujas y ganchillos en estuches para no perderlos ni dañarlos</li>
            <li>Utiliza marcadores para no perder puntos o controlar aumentos y vueltas</li>
            <li>Haz una muestra pequeña antes de empezar para comprobar el tamaño final</li>
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
              <li>Tejer prendas y accesorios con agujas de punto</li>
              <li>Realizar proyectos de ganchillo como gorros, bolsos o amigurumis</li>
              <li>Coser a mano arreglos, remates y pequeñas reparaciones</li>
              <li>Bordar detalles decorativos en tela o ropa</li>
              <li>Unir piezas tejidas y rematar costuras con aguja lanera</li>
              <li>Sujetar puntos y marcar vueltas con accesorios auxiliares</li>
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
              <li>Disponibles en diferentes grosores para adaptarse a cada tipo de hilo o lana</li>
              <li>Agujas para coser, bordar y lana en varios tamaños</li>
              <li>Ganchillos cómodos para tejer con facilidad y buena sujeción</li>
              <li>Materiales resistentes y ligeros, perfectos para uso continuo</li>
              <li>Permiten trabajar con precisión tanto en piezas grandes como en detalles pequeños</li>
              <li>Accesorios útiles como marcadores y cintas métricas para mejorar el proceso</li>
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
              <li>Usa el grosor de aguja o ganchillo recomendado en la etiqueta del ovillo</li>
              <li>Si eres principiante, empieza con lana media y ganchillo cómodo de sujetar</li>
              <li>Para evitar que se te cansen las manos, descansa y estira cada cierto tiempo</li>
              <li>Guarda agujas y ganchillos en estuches para no perderlos ni dañarlos</li>
              <li>Utiliza marcadores para no perder puntos o controlar aumentos y vueltas</li>
              <li>Haz una muestra pequeña antes de empezar para comprobar el tamaño final</li>
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
