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
                <a class="nav-link fw-medium" aria-current="page" href="index.php#landingHero">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#somos">¿Quienes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#productos">Nuestros Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#landingContact">Contáctanos</a>
              </li>
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Páginas</span>
                </a>
                <div class="dropdown-menu p-4">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-grid-alt"></i></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pricing-page.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Pricing">Pricing</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="payment-page.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Payment">Payment</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="checkout-page.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Checkout">Checkout</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="help-center-landing.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">Help Center</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-lock-open"></i></span>
                        </div>
                        <span class="ps-1">Auth Demo</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Login (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Login (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-multisteps.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Register (Multi-steps)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Forgot Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Forgot Password (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Reset Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Reset Password (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-image-alt"></i></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-error.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Error
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-under-maintenance.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Under Maintenance
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-comingsoon.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Coming Soon
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-not-authorized.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Not Authorized
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Verify Email (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Verify Email (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-basic.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Two Steps (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-cover.php"
                            target="_blank">
                            <i class="bx bx-radio-circle me-2"></i>
                            Two Steps (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                      <div class="bg-body nav-img-col p-2">
                        <img
                          src="assets/img/front-pages/misc/nav-item-col-img.png"
                          alt="nav item col image"
                          class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.php" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- navbar button: Start -->
            <li>
              <a href="../vertical-menu-template/auth-login-cover.php" class="btn btn-primary" target="_blank"
                ><span class="tf-icons bx bx-user me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <h1 style="font-size: 40px; text-align: center;font-family: 'Open Sans', 
    sans-serif;font-weight: bolder;color:#74ac58; margin-bottom: 1%;margin-top: 8%;">FUNCIONALIDADES SOPORTE TÉCNICO</h1>
  
        <div id="slider-container">
          <div id="slider">
            <!-- Duplicar los slides al principio y al final para crear un efecto infinito -->
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE1.svg" alt="Imagen 1" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE2.svg" alt="Imagen 2" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE3.svg" alt="Imagen 3" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE4.svg" alt="Imagen 4" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE5.svg" alt="Imagen 5" style="width: 100%; height: 800px;">
            </div>
        
            <!-- Duplicamos los slides para crear un efecto infinito -->
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE6.svg" alt="Imagen 1" style="width: 100%; height: 800px;">
            </div>
            <div class="slide">
              <img src="../../assets/img/front-pages/landing-page/FUNCIONALIDADSOPORTE6.svg" alt="Imagen 1" style="width: 100%; height: 800px;">
            </div>
            
        
            
          </div>
        
          <!-- Botones de navegación -->
          <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
          <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
      
    <title>Document</title>
</head>
<body>
    
</body>
</html>