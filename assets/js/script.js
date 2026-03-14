document.addEventListener("DOMContentLoaded", () => {
  // Año automático
  const yearEl = document.getElementById("currentYear");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // Botón "Subir"
  const subirBtn = document.querySelector(".subir");
  if (subirBtn) {
    window.addEventListener("scroll", () => {
      subirBtn.classList.toggle("visible", window.scrollY > 300);
    });

    subirBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // Paginación con puntos (Hero)
  const dots = document.querySelectorAll(".pagination .dot");
  const sections = [
    document.querySelector("#mercerialarraz"),
    document.querySelector("#manualidadestodos"),
    document.querySelector("#textil-merceria"),
  ];

  const activateDot = (index) => {
    dots.forEach((dot, i) => dot.classList.toggle("active", i === index));
  };

  dots.forEach((dot, i) => {
    dot.addEventListener("click", (e) => {
      e.preventDefault();
      sections[i]?.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  });

  




});



  // Validación del formulario de contacto
  const form = document.querySelector("form");
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const messageInput = document.getElementById("message");

  if (form && nameInput && emailInput && messageInput) {
    form.addEventListener("submit", function (e) {
      let isValid = true;

      // Limpiar estados anteriores
      [nameInput, emailInput, messageInput].forEach(input => {
        input.classList.remove("is-invalid");
      });

      // Validar nombre (mínimo 2 caracteres)
      if (nameInput.value.trim().length < 2) {
        nameInput.classList.add("is-invalid");
        isValid = false;
      }

      // Validar email con regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add("is-invalid");
        isValid = false;
      }

      // Validar mensaje (mínimo 10 caracteres)
      if (messageInput.value.trim().length < 10) {
        messageInput.classList.add("is-invalid");
        isValid = false;
      }

      if (!isValid) {
        e.preventDefault(); // Detiene el envío
      }
    });


  
  }



  