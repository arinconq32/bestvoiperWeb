let index = 0;

function moveSlide(step) {
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  index += step;

  if (index < 0) {
    index = totalSlides - 1;
  } else if (index >= totalSlides) {
    index = 0;
  }

  // Cambiar la posición del slider para mostrar la imagen correspondiente
  const slider = document.querySelector('.slider');
  slider.style.transform = `translateX(-${index * 100}%)`;
}

// Configurar el slider para que cambie automáticamente cada 3 segundos
setInterval(() => moveSlide(1), 3000);