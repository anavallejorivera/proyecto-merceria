<?php 
 $title = "Gracias por tu mensaje | Mercería Larraz";
 $description = 'Mensaje de confirmación de contacto';
require '_partials/header.php';?>
<?php require '_partials/nav.php';?>
<main class="py-5">
    <div class="container-lg mb-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="mb-3 text-footer">Información de la tienda</h5>
                <p class="mb-3">C. del Coso, 66-74, Casco Antiguo, 
                    <br> 50001 Zaragoza</p>
                <hr class="w-100 mb-4">
                <h5 class="mb-3 text-footer">Teléfono</h5>
                <p class="mb-3">976 22 41 13</p>
                <hr class="w-100 mb-4">
                <h5 class="mb-3 text-footer">Email</h5>
                <p class="mb-3">correo@correo.com</p>
                <hr class="w-100 mb-4">
            </div>

            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-center p-5 shadow rounded bg-light">
                    <h2 class="mb-4">¡Gracias por tu mensaje!</h2>
                    <p class="mb-4">Tu consulta ha sido enviada correctamente.<br> Nos pondremos en contacto contigo lo antes posible.</p>
                    <a href="index.php" class="btn btn-cta px-4 py-2">Volver al inicio</a>
                </div>
            </div>

            <div class="d-flex align-items-center pt-2">
                <h5 class="mb-0 me-3 text-footer">Síguenos:</h5>
                <ul class="d-flex justify-content-center justify-content-md-start gap-3 list-unstyled mb-0">
                    <li><a href="http://www.facebook.com" target="_blank" class="social-icon">
                        <svg class="icon__xl"><use href="assets/img/sprite.svg#rrssfacebook"></use></svg>
                        <span class="visually-hidden">Facebook</span>
                    </a></li>
                    <li><a href="http://www.instagram.com" target="_blank" class="social-icon">
                        <svg class="icon__xl"><use href="assets/img/sprite.svg#rrssinstagram"></use></svg>
                        <span class="visually-hidden">Instagram</span>
                    </a></li>
                    <li><a href="https://x.com/" target="_blank" rel="noopener noreferrer" class="social-icon">
                        <svg class="icon__xl"><use href="assets/img/sprite.svg#rrsstwitter"></use></svg>
                        <span class="visually-hidden">X</span>
                    </a></li>
                </ul>
            </div>
        </div>    
    </div>
</main>

<?php require '_partials/footer.php';?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>
