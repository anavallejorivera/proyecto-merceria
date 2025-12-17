<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quienes somos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/carousel.css">
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
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">
                Some representative placeholder content for the first slide of
                the carousel.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Sign up today</a>
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
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>
                Some representative placeholder content for the second slide
                of the carousel.
              </p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
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
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>
                Some representative placeholder content for the third slide of
                this carousel.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
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
        <div class="col-lg-4">
          <svg
            aria-label="Placeholder"
            class="bd-placeholder-img rounded-circle"
            height="140"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="140"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>
            Some representative placeholder content for the three columns of
            text below the carousel. This is the first column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg
            aria-label="Placeholder"
            class="bd-placeholder-img rounded-circle"
            height="140"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="140"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>
            Another exciting bit of representative placeholder content. This
            time, we've moved on to the second column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg
            aria-label="Placeholder"
            class="bd-placeholder-img rounded-circle"
            height="140"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="140"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-color)"></rect>
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>
            And lastly this, the third column of representative placeholder
            content.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            First featurette heading.
            <span class="text-body-secondary">It’ll blow your mind.</span>
          </h2>
          <p class="lead">
            Some great placeholder content for the first featurette here.
            Imagine some exciting prose here.
          </p>
        </div>
        <div class="col-md-5">
          <svg
            aria-label="Placeholder: 500x500"
            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
            height="500"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="500"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-bg)"></rect>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
              500x500
            </text>
          </svg>
        </div>
      </div>
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">
            Oh yeah, it’s that good.
            <span class="text-body-secondary">See for yourself.</span>
          </h2>
          <p class="lead">
            Another featurette? Of course. More placeholder content here to
            give you an idea of how this layout would work with some actual
            real-world content in place.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg
            aria-label="Placeholder: 500x500"
            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
            height="500"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="500"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-bg)"></rect>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
              500x500
            </text>
          </svg>
        </div>
      </div>
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            And lastly, this one.
            <span class="text-body-secondary">Checkmate.</span>
          </h2>
          <p class="lead">
            And yes, this is the last block of representative placeholder
            content. Again, not really intended to be actually read, simply
            here to give you a better view of what this would look like with
            some actual content. Your content.
          </p>
        </div>
        <div class="col-md-5">
          <svg
            aria-label="Placeholder: 500x500"
            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
            height="500"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="500"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-bg)"></rect>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
              500x500
            </text>
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