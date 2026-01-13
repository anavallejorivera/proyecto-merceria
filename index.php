
<?php 
 $title = "Mercería Larraz | ML";
 $description = 'Página de inicio Mercería Larraz';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>
    <!-- HERO -->
<section class="Hero p-0 w-100" aria-label="Presentación Mercería Larraz">

  <!-- Slide/Sección 1 -->
  <article id="mercerialarraz" class="Lockup FirstLockup d-flex align-items-center">
    <div class="Media observe" data-slide="1" aria-hidden="true">
      <img
        src="./assets/img/cat-textil.jpg"
        alt="Materiales de costura y manualidades sobre una mesa"
        loading="eager"
        decoding="async"
      />
    </div>

    <div class="Text d-grid gap-3">
      <p class="eyebrow mb-0">Mercería Larraz</p>

      <h1 class="subhead mb-0">Tu creatividad empieza aquí...</h1>

      <p class="mb-0">
        En el corazón de <strong>Zaragoza</strong>,<br />
        somos la mayor tienda de Aragón en manualidades, <strong>mercería</strong> y
        <strong>creatividad</strong> para todas las edades.
      </p>

      <p class="mb-0">
        <strong>Inspírate</strong>, <strong>crea</strong> y <strong>encuentra</strong> el regalo perfecto.
      </p>

      <a href="./quienes-somos.php" class="button wobble-top btn-cta btn align-self-start">Conócenos</a>
    </div>
  </article>

  <!-- Slide/Sección 2 -->
  <article id="manualidadestodos" class="Lockup SecondLockup d-flex align-items-center">
    <div class="Media observe" data-slide="2" aria-hidden="true">
      <img
        src="./assets/img/hero-imagen.png"
        alt="Manualidades para todos"
        loading="lazy"
        decoding="async"
      />
    </div>

    <div class="Text d-grid gap-3">
      <p class="eyebrow mb-0">Mercería Larraz</p>

      <h2 class="subhead mb-0">Manualidades para todos</h2>

      <p class="mb-0">
        Desde scrapbooking hasta pintura, encontrarás todo lo necesario para dar vida a tus ideas creativas.
        Miles de productos para artistas y aficionados de todas las edades.
      </p>

      <a href="./quienes-somos.php" class="button wobble-top btn-cta btn align-self-start">Conócenos</a>
    </div>
  </article>

  <!-- Slide/Sección 3 -->
  <article id="textil-merceria" class="Lockup ThirdLockup d-flex align-items-center">
    <div class="Media observe" data-slide="3" aria-hidden="true">
      <img
        src="./assets/img/hero-banner.jpg"
        alt="Textil y Mercería"
        loading="lazy"
        decoding="async"
      />
    </div>

    <div class="Text d-grid gap-3">
      <p class="eyebrow mb-0">Mercería Larraz</p>

      <h2 class="subhead mb-0">Textil y Mercería</h2>

      <p class="mb-0">
        Lanas, hilos, telas y accesorios de costura. Todo lo que necesitas para tus labores textiles.
        Desde 1866 manteniendo viva la tradición de la mercería de calidad.
      </p>

      <a href="./quienes-somos.php" class="button wobble-top btn-cta btn align-self-start">Conócenos</a>
    </div>
  </article>

  <!-- PAGINACIÓN (solo desktop) -->
  <nav class="pagination d-none d-lg-flex" aria-label="Navegación de secciones">
    <div class="d-flex gap-3">
      <a class="dot" href="#mercerialarraz" aria-label="Ir a la sección 1"></a>
      <a class="dot" href="#manualidadestodos" aria-label="Ir a la sección 2"></a>
      <a class="dot" href="#textil-merceria" aria-label="Ir a la sección 3"></a>
    </div>
  </nav>

</section>




<!-- Quienes somos -->
<section class="conocenos py-5">
  <div class="container-lg">
    <div class="row align-items-center g-4">
      <div class="col-12 col-lg-6">
        <h2 class="mb-4 text-center">Sobre Nosotros</h2>
        <p class="lead">Larraz es una <strong>empresa centenaria</strong>, galardonada con la medalla Basilio Paraíso por su larga trayectoria empresarial. </p>
        <p class="lead">Queremos <strong>ofrecer</strong> a nuestros clientes una experiencia única en el mundo de las <strong>manualidades</strong>, la <strong>mercería</strong> y las <strong>labores textiles</strong>, combinando tradición, <strong>creatividad</strong> e <strong>innovación</strong> desde el corazón de Zaragoza</p>
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

    <!-- PRODUCTOS DESTACADOS - CARDS -->
<section class="container-lg destacados">
  <div class="text-center mb-5">
      <h2 class="text-center mb-3">Productos Destacados</h2>
      <p class="lead text-muted">Lo mejor de nuestra selección para inspirarte</p>
    </div>
  <div class="container-lg container-cards">
    <div class="card">
      <div class="card-inner" style="--clr:#fff;">
        <div class="box">
          <div class="imgBox">
            <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" alt="Trust & Co.">
          </div>
          <div class="icon">
            <a href="http://www.facebook.com" class="iconBox" ><svg class="icon__xl">
                 <use href="assets/img/sprite.svg#arrowupright"></use>
               </svg><span class="visually-hidden ">arrow-right</span></a>
          </div>
        </div>
      </div>
      <div class="content">
        <h3 class="h4 mb-2">Lanas y Ovillos</h3>
        <p>Amplia selección de lanas de calidad para tus proyectos de tejido</p>
      </div>
    </div>
    <div class="card">
      <div class="card-inner" style="--clr:#fff;">
        <div class="box">
          <div class="imgBox">
            <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" alt="Tonic">
          </div>
          <div class="icon">
            <a href="http://www.facebook.com" class="iconBox" ><svg class="icon__xl">
                 <use href="assets/img/sprite.svg#arrowupright"></use>
               </svg><span class="visually-hidden ">arrow-right</span></a>
          </div>
        </div>
      </div>
      <div class="content">
       <h3 class="h4 mb-2">Cintas y Lazos</h3>
        <p class="small mb-0">Variedad de cintas decorativas para tus creaciones</p>
    
      </div>
    </div>
    <div class="card">
      <div class="card-inner" style="--clr:#fff;">
        <div class="box">
          <div class="imgBox">
            <img src="https://images.unsplash.com/photo-1618574760076-bae45d84041c?w=800" alt="Shower Gel">
          </div>
          <div class="icon">
            <a href="http://www.facebook.com" class="iconBox" ><svg class="icon__xl">
                 <use href="assets/img/sprite.svg#arrowupright"></use>
               </svg><span class="visually-hidden ">arrow-right</span></a>
          </div>
        </div>
      </div>
      <div class="content">
        <h3 class="h4 mb-2">Botones y Bisutería</h3>
        <p class="small mb-0">Complementos perfectos para tus trabajos de costura</p>
      </div>
    </div>
  </div>

</section>
   
     
  <?php require '_partials/footer.php';?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
  </body>
</html>