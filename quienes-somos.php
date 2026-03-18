<?php
$title = "Nosotros | Mercería Larraz";
$description = 'Página de Productos de Mercería';
$base = '.';
require __DIR__ . '/includes/header.php'; ?>
<?php require __DIR__ . '/includes/nav.php'; ?>
<main class="main-somos">
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"></button>
      <button
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg
          aria-hidden="true"
          class="bd-placeholder-img"
          height="100%"
          preserveAspectRatio="xMidYMid slice"
          width="100%"
          xmlns="http://www.w3.org/2000/svg">
          <image
            href="<?php echo $base; ?>/assets/img/larraz-portada.png"
            width="100%"
            height="100%"
            preserveAspectRatio="xMidYMid slice" />
        </svg>
        <div class="carousel-caption text-center pruebas">
          <h1>Más de un siglo inspirando creatividad en el corazón de Zaragoza</h1>
          <p class="small text-light">
            Conóce nuestra historia, misión y visión en el mundo de las manualidades, la mercería y las labores textiles. Desde 1866, Larraz es tu tienda de referencia para dar vida a tus proyectos creativos.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <svg
          aria-hidden="true"
          class="bd-placeholder-img"
          height="100%"
          preserveAspectRatio="xMidYMid slice"
          width="100%"
          xmlns="http://www.w3.org/2000/svg">
          <image
            href="<?php echo $base; ?>/assets/img/cat-manualidades.jpg"
            width="100%"
            height="100%"
            preserveAspectRatio="xMidYMid slice" />
        </svg>
        <div class="carousel-caption text-center pruebas">
          <h1>Quienes Somos</h1>
          <p class="small text-light"></p>
        </div>
      </div>
      <div class="carousel-item">
        <svg
          aria-hidden="true"
          class="bd-placeholder-img"
          height="100%"
          preserveAspectRatio="xMidYMid slice"
          width="100%"
          xmlns="http://www.w3.org/2000/svg">
          <image
            href="<?php echo $base; ?>/assets/img/cat-textil.jpg"
            width="100%"
            height="100%"
            preserveAspectRatio="xMidYMid slice" />
        </svg>
        <div class="carousel-caption text-center pruebas">
          <h1>Quienes Somos</h1>
          <p class="small text-light"></p>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <div class="row featurette">
      <div class="col-12 col-lg-7 pe-5">
        <h2 class="featurette-heading lh-1 title-red">
          Nuestra Historia
        </h2>
        <p class="lead">
          Larraz es una empresa centenaria, galardonada con la medalla Basilio Paraíso por su larga trayectoria empresarial.
          Se desconoce la fecha y localización exacta de su fundación, pero consta que, entre 1866 y 1883, Miguel García Lito y Vicente Larraz Gil solicitaron al ayuntamiento un permiso de obras para reformar el escaparate de su mercería en el antiguo Coso 34, lugar donde actualmente está la calle Valenzuela. <br><br>
          Durante esta época el comercio se dedica a las actividades de sedería, mercería y paquetería, trabajando principalmente productos como hilos, algodones, puntillas, encajes, flecos, pasamanería, cintas, botones y adornos. En 1917 fallece Vicente Larraz Gil, y el negocio queda en manos de Miguel García, ayudado quizás por alguno de los hijos del señor Larraz. Finalmente, es el menor de ellos, Vicente Larraz Cardiel, quien toma la dirección de la empresa.
        </p>
      </div>
      <div class="col-12 col-lg-5 justify-content-center d-flex align-items-center">
        <img src="<?php echo $base; ?>/assets/img/historia.jpg" alt="" class="img1 pt-2" srcset="">
      </div>
    </div>
    <hr class="featurette-divider" />
    <div class="row">
      <div class="col-lg-6 text-center">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-secondary bg-gradient fs-2 mb-3 rounded-circle p-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
          </svg>
        </div>


        <h2 class=" title-red pt-3">Misión</h2>
        <p class="lead px-3">
          Larraz tiene como misión ofrecer a sus clientes una experiencia única en el mundo de las manualidades, la mercería y las labores textiles, combinando tradición, creatividad e innovación. Desde el corazón de Zaragoza.
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-6 text-center">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-secondary bg-gradient fs-2 mb-3 rounded-circle p-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
            <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z" />
          </svg>
        </div>
        <h2 class=" title-red pt-3">Visión</h2>
        <p class="lead px-3">
          Ser reconocida como la tienda de referencia en España en manualidades textiles, mercería y artes creativas, destacando por nuestra capacidad de adaptación, nuestra trayectoria centenaria.
        </p>
      </div>
    </div>
    <!-- /.row -->
    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-12 col-lg-7 order-md-2 ps-lg-5 ps-sm-0 pt-3 pt-lg-0">
        <h2 class="featurette-heading lh-1 title-red pt-3">
          La Tienda
        </h2>
        <p class="lead">
          Larraz está situada en el centro de Zaragoza. Somos la mayor tienda de Aragón de manualidades textiles (o labores), mercería y manualidades creativas de todo tipo y para todas las edades. Un paseo por la tienda te llenará de inspiración, para tus propias creaciones, o para hacer un regalo original.
          La tienda es una alianza entre la tradición y la modernidad: exposición de todos los productos, autoservicio y atención personalizada. Conjuga intemporalidad, elegancia y creatividad.
          Cada temporada incorporamos nuevas gamas de productos siguiendo las últimas tendencias de la moda. Para ello, disponemos de una selección de artículos de fabricación nacional y realizamos importaciones, algunas de las cuales en exclusiva.
        </p>
      </div>
      <div class="col-12 col-lg-5 order-md-1 justify-content-center d-flex align-items-center">
        <img src="<?php echo $base; ?>/assets/img/cajaentrada.jpg" alt="" class="img1" srcset="">
      </div>
    </div>
    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-12 col-lg-7 pe-5">
        <h2 class="featurette-heading lh-1 title-red pt-3">
          Confianza, calidad y seguridad
        </h2>
        <p class="lead"><span class="fw-bold">- Confianza:</span> servimos a miles de clientes que confían en nosotros. Organismos oficiales como la Casa Real, ministerios, gobiernos autonómicos y ayuntamientos, compañías multinacionales y marcas reconocidas, clubes y federaciones deportivas, Ejército, Guardia Civil y otros cuerpos de seguridad, cofradías, partidos políticos y sindicatos, etc.</p>
        <p class="lead">También distribuyen nuestros productos empresas como agencias de publicidad, tiendas de banderas y artículos personalizados, etc.<br /><span class="fw-bold">- Calidad:</span> el conocimiento acumulado durante nuestra larga existencia nos permite ofrecer una amplia variedad de productos con la máxima calidad.</p>
        <p class="lead">Algunos de nuestros productos son los de mayor calidad en España.<br /><span class="fw-bold">- Seguridad:</span> satisfacemos las necesidades de nuestros clientes y cumplimos las fechas de entrega demandadas.</p>
      </div>
      <div class="col-12 col-lg-5 pe-5 d-flex justify-content-center">
        <img src="<?php echo $base; ?>/assets/img/manualidades.png" alt="" class="img1 pt-2" srcset="">
        </svg>
      </div>
    </div>
    <hr class="featurette-divider" />
    <!-- /END THE FEATURETTES -->
  </div>
  <!-- /.container -->

</main>
<!-- FOOTER -->
<?php
include(__DIR__ . '/includes/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>