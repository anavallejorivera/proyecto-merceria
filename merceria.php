<?php 
  $title = "Larraz | Catálogo > Mercería";
  $description = 'Página de Productos de Mercería';
  require '_partials/header.php';
?>
<?php require '_partials/nav.php'; ?>

<!-- Encabezado de la sección de Mercería -->
<section class="catalogo-header text-center mb-2 seccion-compacta container-lg">
  <div class="w-75 mx-auto">
    <h2 class="titulo-catalogo mb-2">Mercería</h2>
    <p class="subtitulo-catalogo mb-1">
      En nuestra sección de Mercería encontrarás todos los imprescindibles para tus proyectos de costura y labores.
      Hilos, lanas, agujas, cierres, botones y todo tipo de accesorios para coser, arreglar o crear prendas y
      complementos con facilidad.
    </p>
    <p class="subtitulo-catalogo mb-3">
      Una selección práctica y variada pensada tanto para principiantes como para quienes disfrutan confeccionando a mano,
      personalizando ropa, reparando detalles o dando vida a nuevas creaciones con un acabado profesional.
    </p>
  </div>
</section>

<!-- Sección de tarjetas Mercería -->
<section class="container-lg catalogo-section seccion-compacta">
  <div class="row g-4">

    <!-- Hilos y lanas -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="ratio ratio-16x9">
        <div class="card h-100 card-hover-up">
          <div class="card-bg bg-hilos-lanas">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Hilos y lanas
              </h5>
              <a href="merceria-hilos-y-lanas.php" class="fw-semibold text-white text-decoration-none">
                EXPLORAR PRODUCTOS →
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Agujas y ganchillos -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="ratio ratio-16x9">
        <div class="card h-100 card-hover-up">
          <div class="card-bg bg-agujas-ganchillos">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Agujas y ganchillos
              </h5>
              <a href="merceria-agujas-y-ganchillos.php" class="fw-semibold text-white text-decoration-none">
                EXPLORAR PRODUCTOS →
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Botones y cierres -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="ratio ratio-16x9">
        <div class="card h-100 card-hover-up">
          <div class="card-bg bg-botones-cierres">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Botones y cierres
              </h5>
              <a href="merceria-botones-y-cierres.php" class="fw-semibold text-white text-decoration-none">
                EXPLORAR PRODUCTOS →
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cintas y elásticos -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="ratio ratio-16x9">
        <div class="card h-100 card-hover-up">
          <div class="card-bg bg-cintas-elasticos">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Cintas y elásticos
              </h5>
              <a href="merceria-cintas-y-elasticos.php" class="fw-semibold text-white text-decoration-none">
                EXPLORAR PRODUCTOS →
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Accesorios de costura -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="ratio ratio-16x9">
        <div class="card h-100 card-hover-up">
          <div class="card-bg bg-accesorios-costura">
            <div class="card-content">
              <h5 class="card-title mb-2">
                <svg class="icono-catalogo" xmlns="http://www.w3.org/2000/svg">
                  <use href="assets/img/sprite.svg#clock"></use>
                </svg>
                Accesorios de costura
              </h5>
              <a href="merceria-accesorios-de-costura.php" class="fw-semibold text-white text-decoration-none">
                EXPLORAR PRODUCTOS →
              </a>
            </div>
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
