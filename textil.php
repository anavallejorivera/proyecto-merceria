<?php 
 $title = "Larraz | Catálogo > Textil";
 $description = 'Página de Productos de Textil';
require '_partials/header.php';
?>
<?php require '_partials/nav.php';?>

<!-- Encabezado de la sección de Textil -->
<section class="catalogo-header text-center mb-2 seccion-compacta container-lg">
  <div class="w-75 mx-auto">
    <h2 class="titulo-catalogo mb-2">Textil</h2>
    <p class="subtitulo-catalogo mb-1">
      En nuestra sección de Textil descubrirás una amplia variedad de telas y materiales para dar forma a tus ideas.
      Tejidos por tipo y por uso, forros, guatas, retales y detalles como encajes y pasamanería para proyectos de confección,
      decoración y manualidades textiles.
    </p>
    <p class="subtitulo-catalogo mb-3">
      Una selección cuidada para quienes disfrutan cosiendo desde cero, creando piezas únicas para el hogar,
      accesorios personalizados o pequeñas colecciones de patchwork, con opciones para cada estilo y necesidad.
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
          <div class="card-bg bg-telas-por-tipo">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Telas por tipo
              </h5>
              <!-- Enlace solo en el texto -->
              <a href="textil-telas-por-tipo.php" class="fw-semibold text-white text-decoration-none">
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
          <div class="card-bg bg-telas-por-uso">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Telas por uso
              </h5>
              <!-- Enlace solo en el texto -->
              <a href="textil-telas-por-uso.php" class="fw-semibold text-white text-decoration-none">
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
          <div class="card-bg bg-forros-y-guatas">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Forros y guatas
              </h5>
              <!-- Enlace solo en el texto -->
              <a href="textil-forros-y-guantes.php" class="fw-semibold text-white text-decoration-none">
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
          <div class="card-bg bg-retales-varios">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Retales
              </h5>
              <!-- Enlace solo en el texto -->
              <a href="textil-retales-varios.php" class="fw-semibold text-white text-decoration-none">
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
          <div class="card-bg bg-encajes-y-pasamaneria">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Encajes y pasamanería
              </h5>
              <!-- Enlace solo en el texto -->
              <a href="textil-encajes-y-pasamaneria.php" class="fw-semibold text-white text-decoration-none">
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
