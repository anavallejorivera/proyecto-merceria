
<?php 
 $title = "Mercería Larraz | ML";
 $description = 'Página de inicio Mercería Larraz';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>


<section class="hero container-lg p-0">
      <div class="row align-items-center g-0">
      <div class="hero-texto order-last col-9 col-lg-6 offset-lg-1">
      <h1>
        Mercería Larraz
      </h1>
      <p><span class="">En el corazón de <strong>Zaragoza</strong>,<br> somos la mayor tienda de Aragón en manualidades, <strong>mercería</strong> y <strong>creatividad</strong> para todas las edades.</p>
    <p>
    <strong>Inspírate</strong>, <strong>crea</strong> y <strong>encuentra</strong> el regalo perfecto.</span></p>
    <p class="">Tu creatividad empieza aquí...</p>
    <div class="cta-group w-75 mx-auto">
      <a href="#productos" rel="wobble-top" class="button wobble-top btn-cta active btn-primary">Explora Productos</a>
    <a href="./quienes-somos.php" rel="wobble-top" class="button wobble-top btn-cta btn-outline-primary">Conocenos</a>
      </div> </div>
      <div class="offset-lg-1 col-lg-4">
      <img src="./assets/img/hero-banner.jpg" alt="">
      </div> 
    </div><!-- DIV CIERRA ROW-->
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













    <!-- PRODUCTOS DESTACADOS - CARRUSEL -->

    <section class="py-5">
  <div class="container">
    <h2 class="text-capitalize mb-5">
      leading companies <br /> have trusted us
    </h2>

    <div class="row g-4">
      <!-- CARD 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 bg-transparent h-100">
          <div class="card-inner position-relative">
            <div class="box">
              <div class="imgBox">
                <img
                  src="https://images.unsplash.com/photo-1601049676869-702ea24cfd58"
                  class="img-fluid"
                  alt="Trust & Co."
                />
              </div>
              
              <div class="icon">
                <a href="#" class="iconBox d-flex justify-content-center align-items-center">
                  <span class="material-symbols-outlined">
                    arrow_outward
                  </span>
                </a>
              </div>
            </div>
          </div>

          <div class="content px-2 pt-3">
            <h3 class="text-capitalize">trust &amp; co.</h3>
            <p class="text-muted">
              Fill out the form and the algorithm will offer the right team of experts
            </p>

            <ul class="list-unstyled d-flex flex-wrap gap-2">
              <li class="tag branding" style="--clr-tag:#d3b19a;">branding</li>
              <li class="tag packaging" style="--clr-tag:#70b3b1;">packaging</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Repite la columna para las demás cards -->
    </div>
  </div>
</section>




  <?php require '_partials/footer.php';?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
  </body>

</html>