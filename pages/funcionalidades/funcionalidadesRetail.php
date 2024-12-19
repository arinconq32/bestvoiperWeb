<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="front-pages-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Bestvoiper Comunicaciones</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/front-config.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>


  <body>
   
    <script src="../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../assets/vendor/js/mega-dropdown.js"></script>
    <script>
 let index = 0;  
let slidesToShow = 3;  // Este será el valor por defecto para pantallas grandes

// Función para mover el slide (con base en el tamaño de la pantalla)
function moveSlide(step) {
  const slides = document.querySelectorAll('.slide');  
  const totalSlides = slides.length;
  
  // Determinar el número de slides a mostrar en función del tamaño de la pantalla
  if (window.innerWidth <= 850) {
    slidesToShow = 1;  // En pantallas móviles, mostramos solo 1 slide a la vez
  } else {
    slidesToShow = 3;  // En pantallas grandes, mostramos 3 slides a la vez
  }

  // Actualizamos el índice según la dirección del desplazamiento
  index += step;
  
  // Ajustar el índice cuando se sale de los límites
  if (index < 0) {
    index = totalSlides - slidesToShow;  
  } else if (index >= totalSlides - slidesToShow) {
    index = 0;  
  }
  
  // Desplazamos el slider
  const slider = document.querySelector('#slider');
  slider.style.transform = `translateX(-${index * (100 / slidesToShow)}%)`;
  
  // Actualizamos las clases de los slides
  updateSlideClasses(slides);
}

// Actualizamos las clases activas de los slides
function updateSlideClasses(slides) {
  slides.forEach((slide, i) => {
    const nextSlideIndex = (index + 1) % slides.length;
    
    if (i === nextSlideIndex) {
      slide.classList.add('active');  // Añadimos la clase 'active' al siguiente slide
    } else {
      slide.classList.remove('active');  // Removemos la clase 'active' a los demás
    }
  });
}

// Escuchar el evento de redimensionar la ventana para actualizar el número de slides visibles
window.addEventListener('resize', () => {
  // Actualizar el número de slides a mostrar cada vez que se cambia el tamaño de la pantalla
  if (window.innerWidth <= 850) {
    slidesToShow = 1;  // Pantallas pequeñas
  } else {
    slidesToShow = 3;  // Pantallas grandes
  }
});


    </script>
<style>

  
.response {
  display: none;
}
#slider-container {
  position: relative;
  width: 90%;
  height: auto;
  margin: auto;
  overflow: hidden;
  margin: 30px auto;
}

#slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
}


.slide {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}

/* El siguiente slide será más grande (cuando se mueve al siguiente grupo) */
.slide.active {
  transform: scale(1);  /* El siguiente slide será el más grande */
  opacity: 1; /* Mayor opacidad para el slide activo */
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  font-size: 24px;
  cursor: pointer;
  z-index: 10;
}

.prev { left: 10px; }
.next { right: 10px; }

/**/
#slider-container1 {
  position: relative;
  width: 90%;
  height: auto;
  margin: auto;
  overflow: hidden;
  margin: 30px auto;
}

#slider1 {
  display: flex;
  transition: transform 0.5s ease-in-out;
}


.slide1 {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}

/* El siguiente slide será más grande (cuando se mueve al siguiente grupo) */
.slide1.active {
  transform: scale(1);  /* El siguiente slide será el más grande */
  opacity: 1; /* Mayor opacidad para el slide activo */
}

.prev1, .next1 {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  font-size: 24px;
  cursor: pointer;
  z-index: 10;
}

.prev1 { left: 10px; }
.next1 { right: 10px; }

/* Pantallas pequeñas (móviles) */
@media (max-width: 850px) {
  body {
    background-color: lightblue;
  }
  .slide {
  min-width: 100%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
.slide1 {
  min-width: 100%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
#slider-container {
  position: relative;
  width: 100%;
  overflow: hidden;
  margin-top: -100px;
}
#slider-container1 {
  position: relative;
  width: 100%;
  overflow: hidden;
  margin-top: -100px;
}
}

/* Pantallas medianas (tablets) */
@media (min-width: 768px) and (max-width: 1024px) {
  body {
    background-color: lightgreen;
  }
  .slide {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
.slide1 {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
}

/* Pantallas grandes (escritorios, laptops) */
@media (min-width: 1025px) {
  body {
    background-color: lightcoral;
  }
  .slide {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
.slide1 {
  min-width: 33.33%; /* Mostrar tres slides a la vez */
  transition: transform 0.5s ease-in-out;
  display: block;
  padding: 10px;
  transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
  opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
}
}
</style>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
               <img src="../../assets/img/branding/LOGOBESTVOIPER.png" width="35"/>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Bestvoiper</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-x bx-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="../../index.php">Inicio</a>
              </li>
             
             
            
             
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../contacto.php">Contáctanos</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../admin.php" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- navbar button: Start -->
            <li>
              <a href="../admin.php" class="btn btn-primary" target="_blank"
                >
                <span class="tf-icons bx bx-user me-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path></svg></span>
                <span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
   

     
        <div id="slider-container">
          <div id="slider">
            <!-- Duplicar los slides al principio y al final para crear un efecto infinito -->
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL1.svg" alt="Responder preguntas de los clientes" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL2.svg" alt="Asesoria en tiempo real doe marcas y productos" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL3.svg" alt="Gestión de pedidos y compras" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL4.svg" alt="Pagos en línea" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL5.svg" alt="Activaciones de marca" style="width: 100%; height: 800px;">
            </div>
        
            <!-- Duplicamos los slides para crear un efecto infinito -->
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL6.svg" alt="Gestión de bases de datos" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL8.svg" alt="Realización de campañas de fidelización" style="width: 100%; height: 800px;">
            </div>
            <div class="slide">
                <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL9.svg" alt="Gestión de domicilios" style="width: 100%; height: 800px;">
              </div>
              <div class="slide">
                <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL7.svg" alt="Más funcionalidades según necesidad del cliente" style="width: 100%; height: 800px;">
              </div>
              <div class="slide">
                <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADRETAIL7.svg" alt="Imagen 2" style="width: 100%; height: 800px;">
              </div>
        
            
          </div>
        
          <!-- Botones de navegación -->
          <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
          <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
      
    
    
    

    
</body>
</html>