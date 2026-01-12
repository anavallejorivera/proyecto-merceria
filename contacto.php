
<?php 
 $title = "Mercería Larraz | ML";
 $description = 'Página de contacto Mercería Larraz';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>
<main class="py-5">
    <div class="container-lg mb-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="mb-3 text-footer">Información de la tienda</h5>
                <p class=" mb-3">C. del Coso, 66-74, Casco Antiguo, 
                    <br> 50001 Zaragoza</p>
                <hr class="w-100 mb-4">
                <h5 class="mb-3 text-footer">Teléfono</h5>
                <p class=" mb-3">976 22 41 13</p>
                <hr class="w-100 mb-4">
               <h5 class="mb-3 text-footer">Email</h5>
                <p class="mb-3">correo@correo.com</p>
                <hr class="w-100 mb-4">
                </div>
            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h5 class="titulo-catalogo mb-4 text-footer">Contacta con nosotros</h5>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Email</label>
                            </div>
                        </div>
            
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button class="btn btn-cta py-3 px-5 " type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>


        <div class="d-flex align-items-center pt-2">
                    <h5 class=" mb-0 me-3 text-footer">Síguenos:</h5>
                    <ul class="d-flex justify-content-center justify-content-md-start gap-3 list-unstyled mb-0">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" class="social-icon">
                                <svg class="icon__xl">
                                    <use href="assets/img/sprite.svg#rrssfacebook"></use>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" class="social-icon">
                                <svg class="icon__xl">
                                    <use href="assets/img/sprite.svg#rrssinstagram"></use>
                                </svg>
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <svg class="icon__xl">
                                    <use href="assets/img/sprite.svg#rrsstwitter"></use>
                                </svg>
                                <span class="visually-hidden">X</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </div>


  


        
        
    

     
     


  <?php require '_partials/footer.php';?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
  </body>

</html>