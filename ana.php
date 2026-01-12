
<?php 
 $title = "Mercería Larraz | ML";
 $description = 'Página de inicio Mercería Larraz';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>
    <!-- HERO -->
      <section class="Hero inline gap-2">
        <div class="Wrapper block content-3">
          <div class="Visual block-center-center">
     
            <picture class="FirstPic">
             
             <img src="./assets/img/cat-textil.jpg" alt="Stories Unveiled" />
            </picture>
            <picture class="SecondPic">
              <img src="./assets/img/hero-imagen.png" alt="Celebrating Life Together" />
            </picture>
            <picture class="ThirdPic">
            <img src="./assets/img/hero-imagen.png" alt="The Art of Giving" />
            </picture>
          </div>
        </div>

        <div class="Content block">
          <div id="StoriesUnveiled" class="FirstLockup block-center-start">
            <div class="block gap-3">
              <h3>Mercería Larraz</h3>
              <div class="subhead">
              Tu creatividad empieza aquí...
              </div>
              <p>En el corazón de Zaragoza,
somos la mayor tienda de Aragón en manualidades, mercería y creatividad para todas las edades.</p>
<p>
Inspírate, crea y encuentra el regalo perfecto.</p>
            </div>
          </div>
          <div
            id="CelebratingLifeTogether"
            class="SecondLockup block-center-start"
          >
            <div class="block gap-3">
              <h3>Celebrating Life Together</h3>
              <div class="subhead">Embrace the significance of shared joy.</div>
              <p>In every celebration, find the heartwarming stories.</p>
            </div>
          </div>
          <div id="TheArtofGiving" class="ThirdLockup block-center-start">
            <div class="block gap-3">
              <h3>The Art of Giving</h3>
              <div class="subhead">
                Explore the stories within each present.
              </div>
              <p>Every gift is a chapter in your family's narrative.</p>
            </div>
          </div>
        </div>

        <!-- mobile sda  -->
        <div class="SmallScreenContent block-center-center">
          <p class="FirstStory">
Tu creatividad empieza aquí...</p>
          <p class="SecondStory">Celebrating Life Together</p>
          <p class="ThirdStory">Stories Unveiled</p>
        </div>
      </section>

      <div class="paginacion block-center-center content-full">
        <div class="inline gap-3">
          <a href="#StoriesUnveiled"></a>
          <a href="#CelebratingLifeTogether"></a>
          <a href="#TheArtofGiving"></a>
        </div>
      </div>









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
            <a href="#" class="iconBox"> <span class="bi bi-box-arrow-up-right">
              <use href="assets/img/sprite.svg#arrowupright"></use>
            
              </span></a>
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
            <a href="#" class="iconBox"> <span class="bi bi-box-arrow-up-right">
              <use href="assets/img/sprite.svg#arrowupright"></use>
      
              </span></a>
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