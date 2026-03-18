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
  const lockups = document.querySelectorAll(".Lockup");
  const heroScroll = document.querySelector(".hero-scroll");
  const paginationNav = document.querySelector(".pagination");
  const heroSection = document.querySelector(".Hero");

  const activateDot = (index) => {
    dots.forEach((dot, i) => dot.classList.toggle("active", i === index));
    lockups.forEach((lockup, i) => lockup.classList.toggle("active", i === index));
  };

  // Desktop: scroll-driven slide activation
  if (heroScroll && lockups.length && window.matchMedia("(min-width: 992px)").matches) {
    activateDot(0);

    const onScroll = () => {
      const rect = heroScroll.getBoundingClientRect();
      const scrollableHeight = heroScroll.offsetHeight - window.innerHeight;
      const scrolled = -rect.top;
      const progress = Math.max(0, Math.min(1, scrolled / scrollableHeight));
      const activeIndex = Math.min(Math.floor(progress * lockups.length), lockups.length - 1);
      activateDot(activeIndex);

      // Ocultar dots cuando la sección conocenos entra al viewport
      if (paginationNav) {
        const conocenos = document.querySelector(".conocenos");
        if (conocenos) {
          const conocenosRect = conocenos.getBoundingClientRect();
          paginationNav.classList.toggle("hidden", conocenosRect.top < window.innerHeight);
        }
      }
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    dots.forEach((dot, i) => {
      dot.addEventListener("click", (e) => {
        e.preventDefault();
        const scrollableHeight = heroScroll.offsetHeight - window.innerHeight;
        const targetScroll = heroScroll.offsetTop + (scrollableHeight * i / lockups.length);
        window.scrollTo({ top: targetScroll, behavior: "smooth" });
      });
    });

  } else {
    // Mobile/tablet: IntersectionObserver
    const sections = [
      document.querySelector("#mercerialarraz"),
      document.querySelector("#manualidadestodos"),
      document.querySelector("#textil-merceria"),
    ];

    dots.forEach((dot, i) => {
      dot.addEventListener("click", (e) => {
        e.preventDefault();
        sections[i]?.scrollIntoView({ behavior: "smooth", block: "start" });
      });
    });

    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const index = sections.indexOf(entry.target);
          if (index !== -1) activateDot(index);
        }
      });
    }, { threshold: 0.6 });

    sections.forEach((section) => {
      if (section) sectionObserver.observe(section);
    });

    // Ocultar dots cuando Hero sale del viewport
    if (paginationNav && heroSection) {
      paginationNav.classList.add("hidden");
      const paginationObserver = new IntersectionObserver(([entry]) => {
        paginationNav.classList.toggle("hidden", !entry.isIntersecting);
      }, { threshold: 0.1 });
      paginationObserver.observe(heroSection);
    }
  }

  // Validación del formulario de contacto
  const form = document.querySelector("form");
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const messageInput = document.getElementById("message");

  if (form && nameInput && emailInput && messageInput) {
    form.addEventListener("submit", function (e) {
      let isValid = true;

      [nameInput, emailInput, messageInput].forEach((input) => {
        input.classList.remove("is-invalid");
      });

      if (nameInput.value.trim().length < 2) {
        nameInput.classList.add("is-invalid");
        isValid = false;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add("is-invalid");
        isValid = false;
      }

      if (messageInput.value.trim().length < 10) {
        messageInput.classList.add("is-invalid");
        isValid = false;
      }

      if (!isValid) {
        e.preventDefault();
      }
    });
  }

});