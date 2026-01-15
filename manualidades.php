
<?php 
 $title = "Larraz | Catálogo > Manualidades";
 $description = 'Página de Productos de Mercería';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>

<!-- Encabezado de la sección de Manualidades -->
<section class="catalogo-header text-center mb-2 seccion-compacta container-lg">
  <div class="w-75 mx-auto">
    <h2 class="titulo-catalogo mb-2">Manualidades</h2>
    <p class="subtitulo-catalogo mb-1">
      En nuestra sección de Manualidades encontrarás todo lo necesario para dar forma a tus ideas creativas.
      Pinturas, pastas modelables, sellos, plantillas y materiales decorativos pensados para proyectos DIY, 
      decoración personalizada y trabajos artesanales.
    </p>
    <p class="subtitulo-catalogo mb-3">
      Una selección cuidada de productos para quienes disfrutan creando con las manos, ya sea para uso personal, 
      regalos hechos a mano o proyectos creativos de todo tipo.
    </p>
  </div>
</section>

<!-- Sección de tarjetas -->
<section class="container-lg catalogo-section seccion-compacta">
  <div class="row g-4">

    <!-- Tarjeta 1 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-pintura-acrilica">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#paleta"></use>
            </svg>
            Pintura acrílica decorativa
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="manualidades-pintura-acrilica-decorativa.php" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Tarjeta 2 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-pasta-modelable">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
            Pasta modelable
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="#" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Tarjeta 3 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-sellos-decorativos">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
            Sellos decorativos
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="#" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Tarjeta 4 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-plantillas-stencil">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
            Plantillas (stencils)
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="#" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Tarjeta 5 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-goma-eva">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
            Goma EVA
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="#" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Tarjeta 6 -->
    <div class="col-12 col-md-6 col-lg-4">
  <div class="ratio ratio-16x9">
    <div class="card h-100 card-hover-up">
      <div class="card-bg bg-soportes-decorar">
        <div class="card-content">
          <h5 class="card-title mb-2">
            <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
            Soportes para decorar
          </h5>
          <!-- Enlace solo en el texto -->
          <a href="#" class="fw-semibold text-white text-decoration-none">
            EXPLORAR PRODUCTOS →
          </a>
        </div>
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
