<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="./assets/css/productos.css">
    <link rel="icon" type="image/svg+xml" href="assets/img/logolarraz.svg">
  </head>
  <body class="">
<?php require '_partials/nav.php';?>
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
            <h3 class="h4 mb-2"><a href="">Lanas y Ovillos</a></h3>
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
           <h3 class="h4 mb-2"><a href="">Cintas y Lazos</a></h3>
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
            <h3 class="h4 mb-2"><a href="">Botones y Bisutería</a></h3>
            <p class="small mb-0">Complementos perfectos para tus trabajos de costura</p>
          </div>
        </div>
    
        <!-- CARD 4 -->
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
           <h3 class="h4 mb-2"><a href="">Cintas y Lazos</a></h3>
            <p class="small mb-0">Variedad de cintas decorativas para tus creaciones</p>
        
          </div>
        </div>
    
      </div>
    
    </section>
    
        

    
    <!-- Mapa responsive -->

 <section class="container-lg map-section p-2" id="visitanos">
   <div class="map-container">
     <!-- Tarjeta con el mapa dentro -->
     <div class="map-card">
       <div class="card">
         <div class="card-body p-0">
           <!-- Mapa de Google dentro de la tarjeta -->
           <iframe
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.1995671898944!2d-0.8817289244519674!3d41.6514299795765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914ee60b50ae7%3A0xc5dda747ab5cd73d!2sLarraz!5e0!3m2!1ses!2ses!4v1766089930691!5m2!1ses!2ses"
             style="border-radius:1.75rem; border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;width: 100%;
          height: 380px; filter: grayscale(20%);"
             loading="lazy"
             referrerpolicy="no-referrer-when-downgrade">
           </iframe>
         </div>
         <!-- Botón centrado sobre el mapa -->
         <div class="card-body text-center map-button-overlay">
           <a href="https://www.google.com/maps/place/Larraz/@41.65143,-0.8817289,16z/data=!3m1!4b1!4m6!3m5!1s0xd5914ee60b50ae7:0xc5dda747ab5cd73d!8m2!3d41.651426!4d-0.879154!16s%2Fg%2F11b6djp4n0?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D"
             target="_blank"
             class="btn-cta btn-lg">
             <i class="fas fa-directions me-2"></i>Cómo llegar
           </a>
         </div>
       </div>
     </div>
   </div>
 </section>


 </main>
 <footer class="pt-4 pb-1">
 <a href="#inicio" class="subir"><svg class="icon__xl">
            <use href="assets/img/sprite.svg#arrow-up"></use>
        </svg><span class="visually-hidden">Inicio</a>
   <div class="container-lg">

     <div class="row mb-4 text-center text-md-start justify-content-center">

       <!-- About -->
       <div class="col-sm-10 col-md-3 mb-4">
         <div class="d-flex justify-content-center justify-content-md-start align-items-center gap-3 mb-3">
           <div class="rounded-circle d-flex align-items-center justify-content-center">
             <a href="./index.php" rel="noopener noreferrer" title="Home"></a>
               <img src="assets/img/logolarraz.svg" alt="Inicio" class="logo">
           </div>

           <div>
             <h6 class="h5 mb-0">Mercería Larraz</h6>
             <p class="small mb-0">Desde 1866</p>
           </div>
         </div>

         <p class="small">
           Entra en nuestra tienda especializada en banderas, mástiles y todo lo
           necesario para exhibirlas con orgullo.
         </p>
         <a href="http://www.larraz.es" target="_blank">www.larraz.es</a>
       </div>

       <!-- Contact -->
       <div class="col-sm-6 col-md-3 mb-4 pt-2 pt-md-4">
         <h6 class="mb-3" id="contacto">Contacto</h6>

         <ul class="list-unstyled small">
           <li class="d-flex justify-content-center justify-content-md-start align-items-start mb-2">
             <svg class="me-2" width="18" height="18">
               <use href="assets/img/sprite.svg#location"></use>
             </svg>
             <div>
               <p class="mb-0">Calle del Coso, 66-74</p>
               <p class="mb-0">50001 Zaragoza, España</p>
             </div>
           </li>

           <li class="d-flex justify-content-center justify-content-md-start align-items-center mb-2">
             <svg class="me-2" width="18" height="18">
               <use href="assets/img/sprite.svg#phoneleft"></use>
             </svg>
             <a href="tel:+34976000000" class="text-decoration-none">
               +34 976 22 41 13
             </a>
           </li>

           <li class="d-flex justify-content-center justify-content-md-start align-items-center mb-3">
             <svg class="me-2" width="18" height="18">
               <use href="assets/img/sprite.svg#letter"></use>
             </svg>
             <a href="mailto:info@mundolarraz.es" class="text-decoration-none">
               info@mundolarraz.es
             </a>
           </li>
         </ul>
       </div>

       <!-- Horario -->
       <div class="col-sm-6 col-md-3 mb-4 pt-2 pt-md-4">
         <h6 class="mb-3">
           <svg class="me-2" width="18" height="18">
             <use href="assets/img/sprite.svg#clock"></use>
           </svg>
           Horario
         </h6>

         <ul class="list-unstyled small">
           <li><strong>Lunes - Viernes:</strong></li>
           <li>10:00 - 13:30 / 17:00 - 20:30</li>
           <li class="mt-2"><strong>Sábados:</strong></li>
           <li>10:00 - 14:00</li>
           <li class="mt-2"><strong>Domingos:</strong></li>
           <li>Cerrado</li>
         </ul>
       </div>

       <!-- Quick Links & Social -->
       <div class="col-sm-6 col-md-2 mb-4 pt-2 pt-md-4">
         <h6 class="mb-3">Enlaces Rápidos</h6>

         <ul class="list-unstyled small mb-3">
           <li><a href="./index.php" class="text-decoration-none">Inicio</a></li>
           <li><a href="./quienes-somos.php" class="text-decoration-none">Nosotros</a></li>
           <li><a href="./manualidades.php" class="text-decoration-none">Manualidades</a></li>
           <li><a href="./textil.php" class="text-decoration-none">Textil</a></li>
           <li><a href="./merceria.php" class="text-decoration-none">Mercería</a></li>
         </ul>

         <h6 class="small mb-2 pt-4">Síguenos:</h6>
         <ul class="d-flex justify-content-center justify-content-md-start gap-2 list-unstyled">
           <li>
             <a href="http://www.facebook.com" target="_blank">
               <svg class="icon__xl">
                 <use href="assets/img/sprite.svg#rrssfacebook"></use>
               </svg>
               <span class="visually-hidden">Facebook</span>
             </a>
           </li>
           <li>
             <a href="http://www.instagram.com" target="_blank">
               <svg class="icon__xl">
                 <use href="assets/img/sprite.svg#rrssinstagram"></use>
               </svg>
               <span class="visually-hidden">Instagram</span>
             </a>
           </li>
           <li>
             <a href="https://x.com/" target="_blank" rel="noopener noreferrer">
               <svg class="icon__xl">
                 <use href="assets/img/sprite.svg#rrsstwitter"></use>
               </svg>
               <span class="visually-hidden">X</span>
             </a>
           </li>
         </ul>
       </div>

     </div>

     <hr class="border-secondary">

     <div class="text-center small">
       <p class="mb-1">
         &copy; <?php echo date('Y'); ?> Mercería Larraz. Todos los derechos reservados.
       </p>
       <p class="mb-0">
         Diseñado por Fernanda | Ana | Antonio.
       </p>
     </div>

   </div>
 </footer>
  </body>
</html>