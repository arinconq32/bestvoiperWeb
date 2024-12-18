<!doctype html>

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
    <link rel="stylesheet" href="../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/front-config.js"></script>
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

/*SEGUNDO CARROUSEL*/
let index1 = 0;  
let slidesToShow1 = 3;  // Valor inicial para pantallas grandes

// Función que mueve el carrusel
function moveSlide1(step) {
  const slides1 = document.querySelectorAll('.slide1');  
  const totalSlides1 = slides1.length;

  // Actualizar el número de slides visibles dependiendo del tamaño de la pantalla
  if (window.innerWidth <= 850) {
    slidesToShow1 = 1;  // En pantallas móviles, mostramos solo 1 slide a la vez
  } else {
    slidesToShow1 = 3;  // En pantallas grandes, mostramos 3 slides a la vez
  }

  index1 += step;

  // Ajustamos el índice cuando se sale de los límites
  if (index1 < 0) {
    index1 = totalSlides1 - slidesToShow1;  
  } else if (index1 >= totalSlides1 - slidesToShow1) {
    index1 = 0;  
  }

  // Desplazamos el slider
  const slider1 = document.querySelector('#slider1');
  slider1.style.transform = `translateX(-${(index1 * (100 / slidesToShow1))}%)`;

  // Actualizamos las clases de los slides
  updateSlideClasses1(slides1);
}

// Función que actualiza las clases de los slides
function updateSlideClasses1(slides1) {
  slides1.forEach(slide1 => {
    slide1.classList.remove('active');  // Eliminamos la clase 'active' de todos los slides
  });

  // Calculamos el índice del slide siguiente y lo marcamos como activo
  const secondSlideIndex = index1 + 1; 
  if (slides1[secondSlideIndex]) {
    slides1[secondSlideIndex].classList.add('active');  // Añadimos la clase 'active' al siguiente slide
  }
}

// Escuchar el evento de redimensionar la ventana para actualizar el número de slides visibles
window.addEventListener('resize', () => {
  if (window.innerWidth <= 850) {
    slidesToShow1 = 1;  // Pantallas pequeñas
  } else {
    slidesToShow1 = 3;  // Pantallas grandes
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
            <a href="/paginaweb/index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
               <img src="../assets/img/branding/LOGOBESTVOIPER.png" width="35" alt="bestvoiper comunicaciones"/>
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
                <a class="nav-link fw-medium" aria-current="page" href="/paginaweb/index.php">Inicio</a>
              </li>
            
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Nuestros Productos</span>
                </a>
                <div class="dropdown-menu p-4">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestcontactcenter.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Pricing">Best Contact Center Pro</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestcallcenter.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Payment">Best Call Center Pro</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestdid.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Checkout">Best DID</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestiptrunk.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">Best IpTrunk</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/masivos.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">SMS Masivos</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                   
                   
                  </div>
                </div>
              </li>
            
              <li class="nav-item">
                <a class="nav-link fw-medium" href="/paginaweb/pages/contacto.php">Contáctanos</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link fw-medium" href="/paginaweb/pages/admin.php" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- navbar button: Start -->
            <li>
              <a href="/paginaweb/pages/admin.php" class="btn btn-primary" style="background-color: #74ac58;border: 1px solid #74ac58;" target="_blank">
                <span class="tf-icons bx bx-user me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div class="container2">
          
            <img
              src="../assets/img/front-pages/landing-page/7.svg"
              alt="mensajes masivos"
              class="imagen"
              data-app-light-img="front-pages/landing-page/7.svg"
              data-app-dark-img="front-pages/landing-page/7.svg"
            />
       
        </div>
      </section>
      <!-- Hero: End -->
       
      <div class="container" style="margin-top: 3%">
        <div class="contenedorCRM">
        <div class="descripcionCRM">
       
        <p>Hacemos que el marketing en SMS sea más inteligente, personalizado y automatizado.</p>
        </div>
        <div class="imagenCRM">
          
          <div id="lottie"  style="width: 80%; height: 80%;margin: auto;"></div>
        </div>
      </div>
        </div>


        <div class="container">
          <div class="contenedorCRM">
          
          <div class="imagenCRM">
            
            <div id="lottie2"  style="width: 80%; height: 80%;margin: auto;"></div>
          </div>
          <div class="descripcionCRM">
         
            <p >Nuestra plataforma podrá enviar información de forma masiva, mejorando la experiencia de contacto con sus clientes.</p>
            </div>
        </div>
          </div>
    
     
          <div class="container">
            <div class="contenedorCRM">
              <div class="descripcionCRM">
           
                <p >Ofrecemos soporte 24/7.Somos la plataforma de servicios masivos que necesita tu negocio para crecer.</p>
                </div>
            <div class="imagenCRM">
              
              <div id="lottie3" style="width: 80%; height: 80%;margin: auto;"></div>
            </div>
         
          </div>
            </div>


         
      <!-- Useful features: Start -->
      <section id="somos" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            
          </div>
          
         <!--<div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/ruedaProductos.svg" alt="laptop charging" />
              </div>
              <h5 class="mb-3">Quality Code</h5>
              <p class="features-icon-description">
                Code structure that all developers will easily understand and fall in love with.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/rocket.png" alt="transition up" />
              </div>
              <h5 class="mb-3">Continuous Updates</h5>
              <p class="features-icon-description">
                Free updates for the next 12 months, including new demos and features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/paper.png" alt="edit" />
              </div>
              <h5 class="mb-3">Stater-Kit</h5>
              <p class="features-icon-description">
                Start your project quickly without having to remove unnecessary features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/check.png" alt="3d select solid" />
              </div>
              <h5 class="mb-3">API Ready</h5>
              <p class="features-icon-description">
                Just change the endpoint and see your own data loaded within seconds.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/user.png" alt="lifebelt" />
              </div>
              <h5 class="mb-3">Excellent Support</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="assets/img/front-pages/icons/keyboard.png" alt="google docs" />
              </div>
              <h5 class="mb-3">Well Documented</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
          </div>
        </div>-->
     
          </div>
       
       
      </section>
      <!-- Useful features: End -->
   
      <!-- Real customers reviews: Start -->
  
      <!-- Real customers reviews: End -->

      <!-- Our great team: Start -->
      
      <p class="text-center mb-3 mb-md-5 pb-3" style="font-family: 'Montserrat', 'sans-serif'; font-weight: 200;font-size: 1.8em;">
       
      </p>
    </div>
      <!-- Our great team: End -->

      <!-- Pricing plans: Start -->
      <h1 class="text-center mb-1" style="color: #74ac58; font-weight: bolder;">CARACTERISTICAS</h1>
   
         
              <div id="slider-container">
                <div id="slider">
                  <!-- Duplicar los slides al principio y al final para crear un efecto infinito -->
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS1.svg" alt="Mensajes de texto a todo operador telefónico" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS2.svg" alt="Comunicación eficaz para todo tipo de actividad rápida, fácil y efectiva" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS3.svg" alt="Tasa de apertura del 95%" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS4.svg" alt="Medio de comunicación más eficaz para conectar con tus clientes y usuarios" style="width: 100%; height: 800px;">
                  </div>
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS5.svg" alt="Ahorra tiempo y dinero con un volumen de envio superior a la competencia.Crea, envia y sigue tus campañas" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS1.svg" alt="Mensajes de texto a todo operador telefónico" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS2.svg" alt="Comunicación eficas para todo tipo de actividad, rápida, fácil y efectiva" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS3.svg" alt="Imagen 3" style="width: 100%; height: 800px;">
                  </div>
              
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS4.svg" alt="Imagen 4" style="width: 100%; height: 800px;">
                  </div>
                  <div class="slide">
                    <img src="../assets/img/front-pages/landing-page/CARACTERISTICASMASIVOS5.svg" alt="Imagen 1" style="width: 100%; height: 800px;">
                  </div>
                
                </div>
              
                <!-- Botones de navegación -->
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
              </div>
            
        
      <!-- Pricing plans: End -->
      <h1 class="text-center mb-1" style="color: #74ac58;font-weight: bolder;">FUNCIONALIDADES</h1>
        
           
              <div id="slider-container">
                <div id="slider1">
              <!-- Duplicar los slides al principio y al final para crear un efecto infinito -->
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF1.svg" alt="Servicios basados en la nube. Permanencia y alcance desde cualquier lugar 24/7" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF2.svg" alt="Sistemas practicos e innovadores con entorno amigable" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF3.svg" alt="Protección de datos garantizada con testeos constantes ante posibles amenazas de seguridad" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF4.svg" alt="Los mejores precios para cualquier tipo de mensajes" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF1.svg" alt="Servicios basados en la nube. Permanencia y alcance desde cualquier lugar 24/7" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF2.svg" alt="Sistemas practicos e innovadores con entorno amigable" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF3.svg" alt="Protección de datos gratnizada con testeos constantes ante posibles amenazas de seguridad" style="width: 100%; height: 800px;">
              </div>
              <div class="slide1">
                <img src="../assets/img/front-pages/landing-page/MASIVOSF4.svg" alt="Imagen 4" style="width: 100%; height: 800px;">
              </div>
              <!-- Repite las imágenes para el efecto infinito -->
            </div>
            <!-- Botones de navegación -->
            <button class="prev1" onclick="moveSlide1(-1)">&#10094;</button>
            <button class="next1" onclick="moveSlide1(1)">&#10095;</button>
          </div>
      
     
       <!-- Pricing plans: Start -->
       
      <!-- Pricing plans: End -->

      


 

 <div class="container">
  <div style="width: 100%; margin: 20px  auto;text-align: center;">
    <span  
  style="font-size: 3em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.3rem;">
  MENSAJES FLASH</span>
  </div>
<div class="contenedorCRM">
  
  <div class="descripcionCRM">

    <p>
      Servicio por medio del cual <b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); 
      color:white; line-height: 2.1rem;">podrá enviar mensajes de forma masiva a sus clientes,</b>
       y estos se verán reflejados en la <b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); 
      color:white; line-height: 2.1rem;">pantalla principal inmediatamente</b> sin importar la 
       aplicación que tengan abierta. Da un 100% de prioridad a lo que quiere mostrar.</p>
      
    </div>
    <div class="imagenCRM">
      <img class="flash" src="../assets/img/front-pages/landing-page/flash.svg" alt="Imagen Flash" >
    </div>
 
</div>
</div>



<div class="container">
<div style="width: 100%; margin: 20px  auto;text-align: center;">
  <span  
style="font-size: 3em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.3rem;">
MENSAJES STANDARD</span>
</div>

  <div class="contenedorCRM">
  <div class="imagenCRM">
  <img class="flash" src="../assets/img/front-pages/landing-page/standar.svg" alt="Imagen Flash" >
</div>
  <div class="descripcionCRM">

    <p>
      Con este servicio no sólo enviará SMS masivos, sino que podrá</p>
      <ul style="margin-left:10%;">
        <li><p><b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); 
      color:white; line-height: 2.1rem;">Programar sus envíos</b> e integrar una URL para hacer estadísticas,
          ya que contamos con el servicio de landing page.</p></li>
        <li><p><b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); 
      color:white; line-height: 2.1rem;">Crear SMS de texto con URL a Whatsapp</b> y saber si sus clientes interactúan
          con este.</p></li>
        <li><p>Integrar otros productos como: docs, landing page, retorno a whatsapp,
          entre otros.</p></li>
      </ul>
      
    </div>
 
  </div>
</div>


<div class="container">
  <div style="width: 100%; margin: 20px  auto;text-align: center;">
    <span  
  style="font-size: 3em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.3rem;">
  MENSAJES DOBLE VIA</span>
  </div>
<div class="contenedorCRM">
  
  <div class="descripcionCRM">

    <p>
      Con este sistema sus clientes podrán responder a un mensaje de texto(sms)
      enviado previamente. Es una herramienta muy 
      <b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); color:white; line-height: 2.1rem;">efectiva para confirmaciones 
      precisas y se aplica en campañas que requieren gestión back office o procesos
      de logística</b> que incluyen procesos como:
      <ul style="margin-left:10%;">
        <li><p>Encuestas</p></li>
        <li><p>Acuerdos a cierres comerciales</p></li>
        <li><p>Actualización de datos</p></li>
        <li><p>Confirmación de disponibilidad</p></li>
        <li><p>Confirmación de entrega (Procesos logística)</p></li>
      </ul></p>
      
    </div>
    <div class="imagenCRM">
      <img class="flash" 
      src="../assets/img/front-pages/landing-page/doblevia.svg" alt="Imagen Flash" >
    </div>
 
</div>
</div>

<div class="container">
  <div style="width: 100%; margin: 20px  auto;text-align: center;">
    <span  
  style="font-size: 2.8em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.3rem;">
  MENSAJES TRANSACCIONALES</span>
  </div>
<div class="contenedorCRM">
  <div class="imagenCRM">
  <img class="flash" 
  src="../assets/img/front-pages/landing-page/transaccionales.svg" 
  alt="Mensajes Transaccionales" >
</div>
  <div class="descripcionCRM">

    <p >
      Más conocidos como OTP (One Time Password), <b style="font-weight: normal;background-color: rgba(116, 172, 88, 0.652); 
      color:white; line-height: 2.1rem;">son códigos numéricos de un solo uso y para
        una sola transacción.</b> Los recibirá a través de un SMS en su teléfono móvil cada vez que quiera ejecutar cualquier
        operación o realizar cualquier petición a través de su banca a distancia.Es ideal para campañas bancarias que requieren
         transacciones con alto nivel de seguridad.</p>
      
    </div>
 
</div>
</div>



  <section style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; margin: 0;">
    <div style="width: 100%; margin: 20px  auto;text-align: center;">
      <span  
    style="font-size: 2.8em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #5579b7 !important;text-align: center;line-height: 1.3rem;">
    ADQUIERE SMS MASIVOS AHORA MISMO</span>
    </div>
    
    
</section>
  <!-- Contact Us: End -->
  <div style="width: 85%; margin: auto;" id="landingContact">
    <section style="width: 100%; display: flex; justify-content: center; align-items: center; 
    flex-direction: column; margin-top: 30px; padding: 0 15px;">
     
     
    
     <div>
      
       <div class="imagenContacto">
        
         <img src="../assets/img/front-pages/landing-page/contacto.svg"
         alt="contactanos"/>
         <div class="col-md-6 col-lg-12 col-xl-6">
           <div class="d-flex align-items-center">
             <div><i class='bx bxs-envelope' style="color:#5579b7; font-size: 3em;margin: 5px;"></i></div>
             <div>
               <p class="mb-0">Correo</p>
               <h5 class="mb-0">
                 <a class="text-heading">info@bestvoiper.com.co</a>
               </h5>
             </div>
           </div>
         </div>
         <div class="col-md-6 col-lg-12 col-xl-6">
           <div class="d-flex align-items-center">
             <div>
               <i class='bx bxs-phone' style="color:#5579b7; font-size: 3em;margin: 5px;" ></i>
             </div>
             <div>
               
               <p class="mb-0">Teléfonos:</p>
               <h5 class="mb-0">
                 <a class="text-heading" style="font-size: 12px;">(+57)3330333014 (+57)312 456 0009</a>
               </h5>
             </div>
           </div>
         </div>
       </div>
       <div>
         <br/>
       <h4 class="mb-1 text-center">¡Escríbenos!</h4>
       <p class="mb-4 text-center" style="width: 90%;margin: auto; margin-bottom: 10px;">
         ¡No dudes en contáctarnos!<br class="d-none d-lg-block" />
         Resolveremos todas las dudas que tengas
       </p>
       <form action="../mail/enviarMail.php" method="POST" id="contactForm">
        
         <input type="hidden" name="product_name" value="Home Page">
         <div style="display: flex; justify-content: space-between; flex-wrap: wrap; ">
           <input
             id="nombres"
             type="text"
             placeholder="Nombre y Apellido"
             name="nombres"
             required
           
           />
           <input
             id="email"
             type="email"
             placeholder="Correo"
             name="email"
           
             required
           />
         </div>
         <input
             id="telefono"
             type="number"
             placeholder="Teléfono de Contacto"
             name="telefono"
             required
         />
         <textarea
             id="mensaje"
             placeholder="¿Cómo podemos ayudarte? (opcional)"
             name="mensaje"
         ></textarea>
         <input type="submit" value="ENVIAR MENSAJE" name="enviar" />
         <div id="respuestaEnviado" style="display: none;">
             <p id="respuestaTexto"></p>
         </div>
         <p class="registro">Con BESTVOIPER crecemos juntos</p>
         
     </form>
   </div>

   </div>
 </section>


 
   <!-- Contact Us: End -->

   <!-- Contact Us: End -->
 </div>
<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
  <div class="footer-top position-relative overflow-hidden z-1">

    <div class="container">
      <div class="row gx-0 gy-4 g-md-5">
        <div class="d-flex justify-content-between align-items-center w-100" >
          
          <!-- Sección de Bestvoiper (al lado derecho) -->
          <a href="/paginaweb/paginaweb/index.php" class="app-brand-link mb-4 d-flex align-items-center">
            <span class="app-brand-logo demo">
              <img src="../assets/img/branding/LOGOBESTVOIPER.png" width="35" 
              alt="bestvoiper comunicaciones"/>
            </span>
            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Bestvoiper</span>
            <span class="footer-text" style="margin-right: 20px;">
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
          </a>
    
          <!-- Sección de Redes Sociales (al lado izquierdo) -->
          <div class="d-flex align-items-center">
            <a href="https://github.com/themeselection" class="footer-link me-3" target="_blank">
              <img src="../assets/img/front-pages/icons/github-light.png" alt="github icon" />
            </a>
            <a href="https://www.facebook.com/ThemeSelections/" class="footer-link me-3" target="_blank">
              <img src="../assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" />
            </a>
            <a href="https://twitter.com/Theme_Selection" class="footer-link me-3" target="_blank">
              <img src="../assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" />
            </a>
            <a href="https://www.instagram.com/themeselection/" class="footer-link" target="_blank">
              <img src="../assets/img/front-pages/icons/instagram-light.png" alt="instagram icon" />
            </a>
          </div>
          
        </div>
      </div>
    </div>



  </div>
  
</footer>
<!-- Footer: End -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/nouislider/nouislider.js"></script>
<script src="../assets/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="../assets/js/front-main2.js"></script>

<!-- Page JS -->
<script src="../assets/js/front-page-landing.js"></script>
</body>








</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.4/lottie.min.js"></script>
<script>
  var animation = lottie.loadAnimation({
      container: document.getElementById('lottie'), // El contenedor donde se renderiza la animación
      renderer: 'svg', // Se recomienda 'svg' o 'canvas'
      loop: true, // Si quieres que la animación se repita
      autoplay: true, // Para que la animación comience automáticamente
      path: '../assets/img/front-pages/landing-page/marketing.json' // Ruta del archivo JSON de la animación Lottie
  });
  var animation = lottie.loadAnimation({
      container: document.getElementById('lottie2'), // El contenedor donde se renderiza la animación
      renderer: 'svg', // Se recomienda 'svg' o 'canvas'
      loop: true, // Si quieres que la animación se repita
      autoplay: true, // Para que la animación comience automáticamente
      path: '../assets/img/front-pages/landing-page/mark.json' // Ruta del archivo JSON de la animación Lottie
  });
  var animation = lottie.loadAnimation({
      container: document.getElementById('lottie3'), // El contenedor donde se renderiza la animación
      renderer: 'svg', // Se recomienda 'svg' o 'canvas'
      loop: true, // Si quieres que la animación se repita
      autoplay: true, // Para que la animación comience automáticamente
      path: '../assets/img/front-pages/landing-page/24.json' // Ruta del archivo JSON de la animación Lottie
  });
</script>
</html>
