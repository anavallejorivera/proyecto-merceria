
 document.getElementById('currentYear').textContent = new Date().getFullYear();

document.addEventListener('DOMContentLoaded', () => {

  const dots = document.querySelectorAll('.pagination .dot');
  const sections = [
    document.querySelector('#StoriesUnveiled'),
    document.querySelector('#CelebratingLifeTogether'),
    document.querySelector('#TheArtofGiving')
  ];
  const pictures = document.querySelectorAll('.Visual picture');

  // Helper: activar sección y picture
  const activateSection = (index) => {
    pictures.forEach((pic, i) => pic.classList.toggle('active', i === index));
    dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
  };

  // Scroll a sección al hacer click en dot
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      sections[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  // Detectar sección visible al hacer scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const index = sections.indexOf(entry.target);
        activateSection(index);
      }
    });
  }, { threshold: 0.6 });

  sections.forEach(section => observer.observe(section));


document.addEventListener("DOMContentLoaded", () => {
  const subirBtn = document.querySelector(".subir");

  window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
          subirBtn.classList.add("visible");
      } else {
          subirBtn.classList.remove("visible");
      }
  });

});