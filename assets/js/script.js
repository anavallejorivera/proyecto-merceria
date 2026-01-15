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

  // const observer = new IntersectionObserver(
  //   (entries) => {
  //     entries.forEach((entry) => {
  //       if (entry.isIntersecting) {
  //         const index = sections.findIndex((sec) => sec === entry.target);
  //         if (index !== -1) activateDot(index);
  //       }
  //     });
  //   },
  //   { threshold: 0.6 }
  // );

  // sections.forEach((section) => {
  //   if (section) observer.observe(section);
  // });

  // // Sticky text en 3ª sección (Textil y Mercería)
  // const thirdText = document.querySelector("#textil-merceria .Text");
  // const thirdLockup = document.querySelector("#textil-merceria");
  // const sectionNosotros = document.querySelector(".nosotros");

  // if (thirdText && thirdLockup && sectionNosotros) {
  //   const updateStickyText = () => {
  //     const lockupBottom = thirdLockup.getBoundingClientRect().bottom;
  //     const nosotrosTop = sectionNosotros.getBoundingClientRect().top;

  //     const isDesktop = window.innerWidth >= 992;

  //     if (isDesktop && lockupBottom <= window.innerHeight && nosotrosTop > 100) {
  //       thirdText.classList.add("sticky-text");
  //     } else {
  //       thirdText.classList.remove("sticky-text");
  //     }
  //   };

  //   window.addEventListener("scroll", updateStickyText);
  //   window.addEventListener("resize", updateStickyText);
  //   updateStickyText(); // Ejecutar al cargar
  // }
});
