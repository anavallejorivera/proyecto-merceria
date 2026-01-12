// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', async (event) => {
      event.preventDefault()
      if (!form.checkValidity()) {
        event.stopPropagation()
        form.classList.add('was-validated')
      }else{
        const formData = new FormData(form)
        const response = await fetch("07-proceso-ajax.php", {
          method: "POST",
          body: formData
        });
        const data = await response.json()
        const feedback = document.querySelector('.feedback')
        feedback.textContent = data.message
        form.classList.remove('was-validated')
        form.reset()
        
        grecaptcha.execute('6LcLEUQsAAAAAPqJwHlK-jDVaM82pHlQpAwsRrf8', {action: 'formulario'})
.then(function(token) {
var recaptchaResponse = document.getElementById('recaptchaResponse');
recaptchaResponse.value = token;
});


        feedback.classList.add('alert')

        if (data.success) {
          feedback.classList.add('alert-success')
        } else {
          feedback.classList.add('alert-danger')
        }


        

// Variable global para almacenar el ID del temporizador
let feedbackTimer;


    // 1. Limpiar el temporizador previo si existe, para que no interfiera
    if (feedbackTimer) {
        clearTimeout(feedbackTimer);
    }
    
    // 2. Limpiar el estado de visibilidad y clases de alerta previas
    feedbackElement.classList.remove('alert-success', 'alert-danger', 'show');
    
    // Configurar el contenido y las clases de alerta
    feedbackElement.textContent = data.message;
    feedbackElement.classList.add('alert');

    if (data.success) {
        feedbackElement.classList.add('alert-success');
    } else {
        feedbackElement.classList.add('alert-danger');
    }
    
    // 3. Mostrar el elemento inmediatamente con fade-in (usando la clase 'show')
    // El 'setTimeout(..., 10)' asegura que el navegador primero aplique las clases de estilo base 
    // y luego aplique 'show' para disparar la transición (fade-in).
    setTimeout(() => {
        feedbackElement.classList.add('show');
    }, 10);


    // 4. Configurar el temporizador para ocultar (fade-out) después de 5 segundos (5000 ms)
    const DURATION_MS = 5000;
    
    feedbackTimer = setTimeout(() => {
        // Iniciar el fade-out (remover la clase 'show')
        feedbackElement.classList.remove('show');

        // Opcional: Limpiar el contenido después de que termine la transición (0.5s)
        // Esto previene que el contenido se muestre si la opacidad falla.
        setTimeout(() => {
             feedbackElement.textContent = '';
             feedbackElement.classList.remove('alert', 'alert-success', 'alert-danger');
        }, 500); // 500 ms = duración de la transición CSS

    }, DURATION_MS);






        //alert("Javascript se encargará de enviar el formulario");
      }

      
    }, false)
  })
})()