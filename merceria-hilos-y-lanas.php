<?php 
$title = "Larraz | Catálogo > Mercería > Hilos y Lanas";
$description = 'Página de Productos de Mercería: Hilos y Lanas';
require '_partials/header.php'; 
require '_partials/nav.php';
require '_partials/breadcrumb.php';
?>

<!-- Encabezado de la sección de Producto -->
<div class="producto-header text-center mb-2 producto-compactamd container-lg">
  <div class="pt-5 w-75 mx-auto">
    <h2 class="titulo-producto mb-2">Hilos y Lanas</h2>
    <p class="subtitulo-producto mb-1 lead">
      Los hilos y lanas son la base de cualquier proyecto de costura, tejido y reparación textil.
      Desde hilos finos para coser con precisión hasta ovillos y madejas para crear prendas y accesorios, son imprescindibles para dar forma a ideas tanto sencillas como avanzadas.
      <br><br>
      Perfectos para remendar, confeccionar, tejer y personalizar, con acabados resistentes y un resultado profesional.
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
          <img src="assets/img/catalogo/merceria/hilos-lanas/cono-hilo-industrial-blanco.jpg" class="d-block w-100 rounded" alt="Cono de hilo industrial blanco">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/hilos-lanas/madejas-lana-natural-beige.jpg" class="d-block w-100 rounded" alt="Madejas de lana natural color beige">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/hilos-lanas/ovillos-lana-colores-variados.jpg" class="d-block w-100 rounded" alt="Ovillos de lana de colores variados">
        </div>
        <div class="carousel-item">
          <img src="assets/img/catalogo/merceria/hilos-lanas/set-carretes-hilo-coser.jpg" class="d-block w-100 rounded" alt="Set de carretes de hilo para coser">
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
            <li>Coser a mano o a máquina prendas, arreglos y dobladillos</li>
            <li>Tejer bufandas, gorros, mantas y accesorios de punto o ganchillo</li>
            <li>Realizar remates, costuras de refuerzo y pequeños arreglos del día a día</li>
            <li>Crear proyectos de bordado, decoración textil y manualidades con hilo</li>
            <li>Trabajar piezas artesanales como amigurumis y tejidos creativos</li>
            <li>Dar un acabado limpio y duradero a prendas y complementos</li>
          </ul>
        </div>

        <!-- CARACTERÍSTICAS -->
        <div class="tab-pane fade" id="caracteristicas" role="tabpanel">
          <ul>
            <li>Gran variedad de grosores: desde hilo fino hasta lana más gruesa</li>
            <li>Diferentes formatos: carretes, conos industriales, ovillos y madejas</li>
            <li>Disponible en muchos colores para combinar o contrastar diseños</li>
            <li>Hilos resistentes para costura básica, arreglos y trabajos continuos</li>
            <li>Lanas suaves ideales para prendas cálidas y proyectos hechos a mano</li>
            <li>Permite elegir textura y acabado según el tipo de tejido y uso final</li>
          </ul>
        </div>

        <!-- TIPS -->
        <div class="tab-pane fade" id="tips" role="tabpanel">
          <ul>
            <li>Elige el grosor adecuado según aguja y tipo de tela o punto</li>
            <li>Para costura a máquina, usa hilo resistente y ajusta la tensión antes</li>
            <li>Si vas a tejer, prueba una pequeña muestra para ver el resultado final</li>
            <li>Guarda ovillos y madejas en bolsas para evitar polvo y enredos</li>
            <li>Evita la humedad para que la lana no se deforme ni pierda calidad</li>
            <li>Si combinas colores, comprueba el tono con luz natural antes de empezar</li>
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
              <li>Coser a mano o a máquina prendas, arreglos y dobladillos</li>
              <li>Tejer bufandas, gorros, mantas y accesorios de punto o ganchillo</li>
              <li>Realizar remates, costuras de refuerzo y pequeños arreglos del día a día</li>
              <li>Crear proyectos de bordado, decoración textil y manualidades con hilo</li>
              <li>Trabajar piezas artesanales como amigurumis y tejidos creativos</li>
              <li>Dar un acabado limpio y duradero a prendas y complementos</li>
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
              <li>Gran variedad de grosores: desde hilo fino hasta lana más gruesa</li>
              <li>Diferentes formatos: carretes, conos industriales, ovillos y madejas</li>
              <li>Disponible en muchos colores para combinar o contrastar diseños</li>
              <li>Hilos resistentes para costura básica, arreglos y trabajos continuos</li>
              <li>Lanas suaves ideales para prendas cálidas y proyectos hechos a mano</li>
              <li>Permite elegir textura y acabado según el tipo de tejido y uso final</li>
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
              <li>Elige el grosor adecuado según aguja y tipo de tela o punto</li>
              <li>Para costura a máquina, usa hilo resistente y ajusta la tensión antes</li>
              <li>Si vas a tejer, prueba una pequeña muestra para ver el resultado final</li>
              <li>Guarda ovillos y madejas en bolsas para evitar polvo y enredos</li>
              <li>Evita la humedad para que la lana no se deforme ni pierda calidad</li>
              <li>Si combinas colores, comprueba el tono con luz natural antes de empezar</li>
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
