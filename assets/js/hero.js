document.addEventListener('DOMContentLoaded', () => {

  /* ===== Año automático ===== */
  const yearEl = document.getElementById('currentYear');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  /* ===== Paginación por secciones ===== */
  const dots = document.querySelectorAll('.pagination .dot');

  const sections = [
    document.querySelector('#StoriesUnveiled'),
    document.querySelector('#CelebratingLifeTogether'),
    document.querySelector('#TheArtofGiving')
  ];

  const pictures = document.querySelectorAll('.Visual.picture');

  const activateSection = (index) => {
    pictures.forEach((pic, i) =>
      pic.classList.toggle('active', i === index)
    );
    dots.forEach((dot, i) =>
      dot.classList.toggle('active', i === index)
    );
  };

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      if (sections[i]) {
        sections[i].scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const index = sections.indexOf(entry.target);
        if (index !== -1) activateSection(index);
      }
    });
  }, { threshold: 0.6 });

  sections.forEach(section => {
    if (section) observer.observe(section);
  });

  /* ===== Botón subir ===== */
  const subirBtn = document.querySelector(".subir");
  if (subirBtn) {
    window.addEventListener("scroll", () => {
      subirBtn.classList.toggle("visible", window.scrollY > 300);
    });
  }

  /* ===== Menú activo según URL ===== */

  // ⚠️ Quita el alert cuando ya esté probado
  // alert(location.pathname);

  const currentPage = location.pathname.split("/").pop() || "index.html";
  const links = document.querySelectorAll(".nav-link a");

  links.forEach(link => {
    const linkPage = link.getAttribute("href").split("/").pop();
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });

});
