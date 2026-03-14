document.addEventListener('DOMContentLoaded', () => {

  /* ===== Año automático ===== */
  const yearEl = document.getElementById('currentYear');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

/* ===== Paginación por secciones ===== */
const dots = document.querySelectorAll('.pagination .dot');

const sections = [
  document.querySelector('#mercerialarraz'),
  document.querySelector('#manualidadestodos'),
  document.querySelector('#textil-merceria')
];

const pictures = document.querySelectorAll('.Media.picture'); // ACTUALIZADO ✅

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



// hero scroll desappear
const heroSection = document.querySelector(".Hero");
const nosotrosSection = document.querySelector(".conocenos");

if (heroSection && conocenosSection) {
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        heroSection.classList.add("fade-out");
      } else {
        heroSection.classList.remove("fade-out");
      }
    },
    {
      root: null,
      threshold: 0.3,
    }
  );

  observer.observe(conocenosSection);
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
