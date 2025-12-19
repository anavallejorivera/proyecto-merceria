<?php include ('_partials/nav.php'); ?>
<footer class="pt-4 pb-1">
  <div class="container">
    <div class="row mb-4">
      <!-- About -->
      <div class="col-md-3 mb-4">
        <div class="d-flex align-items-center mb-3">
          <div class="ms-2">
            <h6>Mercería Larraz</h5>
            <img src="assets/img/logolarraz.svg" alt="Inicio" class="logo align-items-center">
          </div>
        </div>
        <p class="small">
          Entra en nuestra tienda especializada enr banderas, mástiles y todo lo necesario para exhibirlas con orgullo.
        </p>
        <a href="www.larraz.es">www.larraz.es</a>
      </div>

      <!-- Contact -->
<div class="col-md-3 mb-4">
  <h6 class="mb-3">Contacto</h6>

  <ul class="list-unstyled small">
    <li class="d-flex align-items-start mb-2">
      <svg class="me-2" width="18" height="18">
        <use href="assets/img/sprite-1.svg#location"></use>
      </svg>
      <div>
        <p class="mb-0">Calle deExample, 123</p>
        <p class="mb-0">50001 Zaragoza, España</p>
      </div>
    </li>

    <li class="d-flex align-items-center mb-2">
      <svg class="me-2" width="18" height="18">
        <use href="assets/img/sprite-1.svg#phoneleft"></use>
      </svg>
      <a href="tel:+34976000000" class="text-decoration-none">
        +34 976 00 00 00
      </a>
    </li>

    <li class="d-flex align-items-center mb-3">
      <svg class="me-2" width="18" height="18">
        <use href="assets/img/sprite-1.svg#letter"></use>
      </svg>
      <a href="mailto:info@mundolarraz.es" class="text-decoration-none">
        info@mundolarraz.es
      </a>
    </li>
  </ul>

  <!-- Mapa responsive -->
  <div class="ratio ratio-16x9 rounded overflow-hidden" id="visitanos">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.1995671898944!2d-0.8817289244519674!3d41.6514299795765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914ee60b50ae7%3A0xc5dda747ab5cd73d!2sLarraz!5e0!3m2!1ses!2ses!4v1766089930691!5m2!1ses!2ses"
      style="border:0;"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
  </div>
</div>
      <!-- Schedule -->
      <div class="col-md-3 mb-4">
        <h6 class=" mb-3">Horario</h6>
        <ul class="list-unstyled small">
          <li><strong>Lunes - Viernes:</strong> </li>
          <li>9:30 - 13:30 / 17:00 - 20:00</li>
          <li><strong>Sábados:</strong> </li>
          <li>10:00 - 14:00</li>
          <li><strong>Domingos:</strong> </li>
          <li>Cerrado</li>
        </ul>
      </div>

      <!-- Quick Links & Social -->
      <div class="col-md-3 mb-4">
        <h6 class=" mb-3">Enlaces Rápidos</h6>
        <ul class="list-unstyled small mb-3">
          <li><a href="#inicio" class=" text-decoration-none">Inicio</a></li>
          <li><a href="#categorias" class=" text-decoration-none">Categorías</a></li>
          <li><a href="#productos" class=" text-decoration-none">Productos</a></li>
          <li><a href="#nosotros" class=" text-decoration-none">Nosotros</a></li>
          <li><a href="#contacto" class=" text-decoration-none">Contacto</a></li>
        </ul>

        <h6 class="small  mb-2">Síguenos:</h6>
        <div class="d-flex gap-2">
          <a href="#" class="btn  btn-sm p-2">
            <svg width="18" height="18"><use href="assets/img/sprite-1.svg#facebook"/></svg>
          </a>
          <a href="#" class="btn  btn-sm p-2">
            <svg width="18" height="18"><use href="assets/img/sprite-1.svg#instagram"/></svg>
          </a>
          <a href="#" class="btn  btn-sm p-2">
            <svg width="18" height="18"><use href="assets/img/sprite-1.svg#twitter"/></svg>
          </a>
        </div>
      </div>
    </div>

    <hr class="border-secondary">

    <div class="text-center">
      <p>
        &copy;<?php echo date(format: 'Y');?> Mundo Larraz. Todos los derechos reservados.</p>
      <p>Diseñado con pasión por la creatividad y las manualidades.</p>
    </div>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>