<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quienes somos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/carousel.css?v=1.5">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body class="about">
  <header>
    <div class="border-bottom pre-header">
      <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center py-2">
          <!-- Información de contacto -->
          <ul class="list-unstyled d-flex gap-3 mb-2 mb-md-0">
            <li class="telefono">
              <a href="tel:+34666666666" class="text-decoration-none">+34 666 666 666</a>
            </li>
            <li>
              <a href="mailto:correo@correo.com" class="text-decoration-none">correo@correo.com</a>
            </li>
          </ul>

          <!-- Redes sociales -->
          <ul class="list-unstyled d-flex gap-3 mb-0 rrss">
            <li>
              <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" title="Facebook" class="text-decoration-none">
                <svg>
                  <use href="assets/img/sprite.svg#rrssfacebook"></use>
                </svg>
                <span class="visually-hidden">Facebook</span>
              </a>
            </li>
            <li>
              <a href="https://x.com/" target="_blank" rel="noopener noreferrer" title="X" class="text-decoration-none">
                <svg>
                  <use href="assets/img/sprite.svg#rrsstwitter"></use>
                </svg>
                <span class="visually-hidden">X</span>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" title="Instagram" class="text-decoration-none">
                <svg class="icon__xl">
                  <use href="assets/img/sprite.svg#rrssinstagram"></use>
                </svg>
                <span class="visually-hidden">Instagram</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- inicio seccion nav -->
    <nav class="navbar navbar-expand-lg py-0 m-2">
      <div class="container-xl pe-xl-0 align-items-xl-start">
        <a href="#" rel="noopener noreferrer" title="Home" class="text-decoration-none navbar-brand">
          <img src="assets/img/logolarraz.svg" alt="Inicio">
          <span class="visually-hidden">Home</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Conocenos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cátalogo
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Manualidades</a></li>
                <li><a class="dropdown-item" href="#">Manualidadest</a></li>
                <li><a class="dropdown-item" href="#">Manualidadest</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link cta" href="#">Contacto</a>
            </li>

            <div class="d-flex" role="search">
              <button class="btn btn-outline-success btn-cta" type="submit">Visitanos</button>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <!-- fin nav  -->
  </header>
  <main>
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
              href="assets/img/larraz-portada.png"
              width="100%"
              height="100%"
              preserveAspectRatio="xMidYMid slice" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Quienes Somos</h1>
              <p class="opacity-75">
                Nuestra historia
              </p>
              <p>
                <a class="btn btn-lg btn-primary boton-orange" href="#nuestrahistoria">Ver más</a>
              </p>
            </div>
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
              href="assets/img/cat-manualidades.jpg"
              width="100%"
              height="100%"
              preserveAspectRatio="xMidYMid slice" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Quienes Somos</h1>
              <p>
                Nuestra historia
              </p>
              <p><a class="btn btn-lg btn-primary boton-orange" href="#nuestrahistoria">Ver más</a></p>
            </div>
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
              href="assets/img/cat-merceria.jpg"
              width="100%"
              height="100%"
              preserveAspectRatio="xMidYMid slice" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Quienes Somos</h1>
              <p>
                Nuestra historia
              </p>
              <p>
                <a class="btn btn-lg btn-primary boton-orange" href="#nuestrahistoria">Ver más</a>
              </p>
            </div>
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
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
          </svg>

          <h2 class="fw-bold title-red">Misión</h2>
          <p class="lead">
            Larraz tiene como misión ofrecer a sus clientes una experiencia única en el mundo de las manualidades, la mercería y las labores textiles, combinando tradición, creatividad e innovación. Desde el corazón de Zaragoza, buscamos inspirar la expresión artística y artesanal de personas de todas las edades mediante una atención personalizada.
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-6 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
            <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z" />
          </svg>
          <h2 class="fw-bold title-red">Visión</h2>
          <p class="lead">
            Ser reconocida como la tienda de referencia en España en manualidades textiles, mercería y artes creativas, destacando por nuestra capacidad de adaptación, nuestra trayectoria centenaria y nuestro compromiso con la innovación constante. Aspiramos a mantener viva la tradición artesanal mientras incorporamos nuevas tecnologías, productos y experiencias.
          </p>
        </div>
      </div>
      <!-- /.row -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7 pe-5">
          <h2 class="featurette-heading fw-bold lh-1 title-red">
            Nuestra Historia
          </h2>
          <p class="lead">
            Larraz es una empresa centenaria, galardonada con la medalla Basilio Paraíso por su larga trayectoria empresarial.
            Se desconoce la fecha y localización exacta de su fundación, pero consta que, entre 1866 y 1883, Miguel García Lito y Vicente Larraz Gil solicitaron al ayuntamiento un permiso de obras para reformar el escaparate de su mercería en el antiguo Coso 34, lugar donde actualmente está la calle Valenzuela. <br><br>
            Durante esta época el comercio se dedica a las actividades de sedería, mercería y paquetería, trabajando principalmente productos como hilos, algodones, puntillas, encajes, flecos, pasamanería, cintas, botones y adornos. En 1917 fallece Vicente Larraz Gil, y el negocio queda en manos de Miguel García, ayudado quizás por alguno de los hijos del señor Larraz. Finalmente, es el menor de ellos, Vicente Larraz Cardiel, quien toma la dirección de la empresa.
          </p>
        </div>
        <div class="col-md-5">
          <img src="assets/img/historia.jpg" alt="" class="img1 pt-2" srcset="">
        </div>
      </div>
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7 order-md-2 ps-5">
          <h2 class="featurette-heading fw-bold lh-1 title-red">
            La Tienda
          </h2>
          <p class="lead">
            Larraz está situada en el centro de Zaragoza. Somos la mayor tienda de Aragón de manualidades textiles (o labores), mercería y manualidades creativas de todo tipo y para todas las edades. Un paseo por la tienda te llenará de inspiración, para tus propias creaciones, o para hacer un regalo original.
            La tienda es una alianza entre la tradición y la modernidad: exposición de todos los productos, autoservicio y atención personalizada. Conjuga intemporalidad, elegancia y creatividad.
            Cada temporada incorporamos nuevas gamas de productos siguiendo las últimas tendencias de la moda. Para ello, disponemos de una selección de artículos de fabricación nacional y realizamos importaciones, algunas de las cuales en exclusiva.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="assets/img/cajaentrada.jpg" alt="" class="img1" srcset="">
        </div>
      </div>
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7 pe-5">
          <h2 class="featurette-heading fw-bold lh-1 title-red">
            Confianza, calidad y seguridad
          </h2>
          <p class="lead"><strong>- Confianza:</strong> servimos a miles de clientes que confían en nosotros. Organismos oficiales como la Casa Real, ministerios, gobiernos autonómicos y ayuntamientos, compañías multinacionales y marcas reconocidas, clubes y federaciones deportivas, Ejército, Guardia Civil y otros cuerpos de seguridad, cofradías, partidos políticos y sindicatos, etc.</p>
          <p class="lead">También distribuyen nuestros productos empresas como agencias de publicidad, tiendas de banderas y artículos personalizados, etc.<br /><strong>- Calidad:</strong> el conocimiento acumulado durante nuestra larga existencia nos permite ofrecer una amplia variedad de productos con la máxima calidad.</p>
          <p class="lead">Algunos de nuestros productos son los de mayor calidad en España.<br /><strong>- Seguridad:</strong> satisfacemos las necesidades de nuestros clientes y cumplimos las fechas de entrega demandadas.</p>
        </div>
        <div class="col-md-5 pe-5
        ">
          <img src="assets/img/manualidades.png" alt="" class="img1 pt-2" srcset="">
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
  include('_partials/footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>