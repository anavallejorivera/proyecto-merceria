
<?php 
 $title = "Mercería Larraz | ML";
 $description = 'Página de inicio Mercería Larraz';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>
<section class="hero" id="inicio">
    <h1>Mercería Larraz</h1>
    <div class="hero-texto p-2 mb-2 bg-white bg-opacity-50">
    <p class="hero-texto">Tu creatividad empieza aquí</p>
    <p><span class="">Encuentra todo lo necesario para tus creaciones y diseños únicos.
Ven, recorre nuestra tienda y déjate inspirar</span></p>
     </div>
     <div>
    <a href="#productos" rel="wobble-top" class="button wobble-top btn-cta">Explora Productos</a>
    <a href="./quienes-somos.php" rel="wobble-top" class="button wobble-top btn-cta">Conocenos</a>
  </div>
    </section>
<!-- Quienes somos -->
<section class="conocenos py-5">
  <div class="container-lg">
    <div class="row align-items-center g-4">
      <div class="col-12 col-lg-6">
        <h2 class="mb-4 text-center">Sobre Nosotros</h2>
        <p class="lead">En el corazón de Zaragoza, somos la mayor tienda de Aragón en manualidades, mercería y creatividad para todas las edades. </p>
        <p class="lead">Inspírate, crea y encuentra el regalo perfecto.</p>
      </div>
      <div class="col-12 col-lg-6">
        <img src="./assets/img/cat-textil.jpg" alt="Tienda Larraz" class="img-fluid rounded-4 shadow">
      </div>
    </div>
  </div>
</section>
 <!-- SECCION CARDS -->
<section class="nosotros">
  <div class="container-lg">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-6 col-lg-3">
        <div class="card-nosotros p-4 rounded-4 h-100">
          <div class="circle-nosotros rounded-circle d-flex align-items-center justify-content-center mb-3">
            <svg>
              <use href="assets/img/sprite.svg#clock"></use>
            </svg>
          </div>
          <h5>Más de 125 años</h5>
          <p class="small text-light">
            De tradición familiar desde 1900
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-6 col-lg-3">
        <div class="card-nosotros p-4 rounded-4 h-100">
          <div class="circle-nosotros rounded-circle d-flex align-items-center justify-content-center mb-3">
            <svg>
              <use href="assets/img/sprite.svg#heart"></use>
            </svg>
          </div>
          <h5>Pasión artesanal</h5>
          <p class="small text-light">
            Compartiendo nuestra pasión por las manualidades
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-6 col-lg-3">
        <div class="card-nosotros p-4 rounded-4 h-100">
          <div class="circle-nosotros rounded-circle d-flex align-items-center justify-content-center mb-3">
            <svg>
              <use href="assets/img/sprite.svg#persons"></use>
            </svg>
          </div>
          <h5>Experiencia completa</h5>
          <p class="small text-light">
            Todo lo que necesitas en un solo lugar
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-6 col-lg-3">
        <div class="card-nosotros p-4 rounded-4 h-100">
          <div class="circle-nosotros rounded-circle d-flex align-items-center justify-content-center mb-3">
            <svg>
              <use href="assets/img/sprite.svg#lamp"></use>
            </svg>
          </div>
          <h5>Atención personalizada</h5>
          <p class="">
            Te ayudamos en cada proyecto
          </p>
        </div>
      </div>
    </div>       
  </div>    
</section>

    <!-- PRODUCTOS DESTACADOS - CARRUSEL -->
<section id="productos" class="py-5 destacados">
  <div class="container-lg">
    <!-- Encabezado -->
    <div class="text-center mb-5">
      <h2 class="text-center mb-3">Productos Destacados</h2>
      <p class="lead text-muted">Lo mejor de nuestra selección para inspirarte</p>
    </div>

    <!-- Carrusel -->
    <div id="productosCarousel" class="carousel slide">
      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#productosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#productosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#productosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#productosCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner carousel-inner-1 ">
        <!-- Slide 1 -->
        <div class="carousel-item carousel-item-home active">
          <div class="row g-3 px-3">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" 
                     class="img-fluid producto-img" 
                     alt="Lanas y Ovillos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Lanas y Ovillos</h3>
                  <p class="small mb-0">Amplia selección de lanas de calidad para tus proyectos de tejido</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1535551393484-1a1907f51759?w=800" 
                     class="img-fluid producto-img" 
                     alt="Cintas y Lazos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Cintas y Lazos</h3>
                  <p class="small mb-0">Variedad de cintas decorativas para tus creaciones</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1613555612473-90cf723dfb60?w=800" 
                     class="img-fluid producto-img" 
                     alt="Botones y Bisutería">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Botones y Bisutería</h3>
                  <p class="small mb-0">Complementos perfectos para tus trabajos de costura</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item carousel-item-home">
          <div class="row g-3 px-3">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1613555612473-90cf723dfb60?w=800" 
                     class="img-fluid producto-img" 
                     alt="Botones y Bisutería">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Botones y Bisutería</h3>
                  <p class="small mb-0">Complementos perfectos para tus trabajos de costura</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1731504801830-5b14ac73d7ca?w=800" 
                     class="img-fluid producto-img" 
                     alt="Telas y Textiles">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Telas y Textiles</h3>
                  <p class="small mb-0">Telas de todos los tipos para tus proyectos textiles</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" 
                     class="img-fluid producto-img" 
                     alt="Lanas y Ovillos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Lanas y Ovillos</h3>
                  <p class="small mb-0">Amplia selección de lanas de calidad para tus proyectos de tejido</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item carousel-item-home">
          <div class="row g-3 px-3">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1731504801830-5b14ac73d7ca?w=800" 
                     class="img-fluid producto-img" 
                     alt="Telas y Textiles">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Telas y Textiles</h3>
                  <p class="small mb-0">Telas de todos los tipos para tus proyectos textiles</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" 
                     class="img-fluid producto-img" 
                     alt="Lanas y Ovillos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Lanas y Ovillos</h3>
                  <p class="small mb-0">Amplia selección de lanas de calidad para tus proyectos de tejido</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1535551393484-1a1907f51759?w=800" 
                     class="img-fluid producto-img" 
                     alt="Cintas y Lazos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Cintas y Lazos</h3>
                  <p class="small mb-0">Variedad de cintas decorativas para tus creaciones</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item carousel-item-home">
          <div class="row g-3 px-3">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1535551393484-1a1907f51759?w=800" 
                     class="img-fluid producto-img" 
                     alt="Cintas y Lazos">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Cintas y Lazos</h3>
                  <p class="small mb-0">Variedad de cintas decorativas para tus creaciones</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1613555612473-90cf723dfb60?w=800" 
                     class="img-fluid producto-img" 
                     alt="Botones y Bisutería">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Botones y Bisutería</h3>
                  <p class="small mb-0">Complementos perfectos para tus trabajos de costura</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-none d-lg-block">
              <div class="card-producto position-relative overflow-hidden rounded-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1731504801830-5b14ac73d7ca?w=800" 
                     class="img-fluid producto-img" 
                     alt="Telas y Textiles">
                <div class="producto-overlay position-absolute bottom-0 start-0 end-0 text-white p-4">
                  <h3 class="h4 mb-2">Telas y Textiles</h3>
                  <p class="small mb-0">Telas de todos los tipos para tus proyectos textiles</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#productosCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#productosCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</section>
   
     


  <?php require '_partials/footer.php';?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
  </body>

</html>